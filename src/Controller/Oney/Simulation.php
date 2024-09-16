<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Controller\Oney;

use Dnd\Catalog\Model\ProductOptions;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ProductFactory;
use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\ConfigurableProduct\Api\LinkManagementInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\View\LayoutInterface;
use Payplug\Payments\Block\Oney\Simulation as OneySimulationBlock;
use Payplug\Payments\Controller\Oney\Simulation as BaseSimulation;
use Payplug\Payments\Logger\Logger;

/**
 * {@override} To use Hyva templates
 */
class Simulation extends BaseSimulation
{
    /**
     * Constants to the Hyva templates
     */
    public const HYVA_CONTENT = 'Hyva_CheckoutPayplug::oney/simulation_content.phtml';
    public const HYVA_SIMULATION = 'Hyva_CheckoutPayplug::oney/simulation.phtml';

    public function __construct(
        Context $context,
        protected JsonFactory $resultJsonFactory,
        protected ProductFactory $productFactory,
        protected LayoutInterface $layout,
        protected LinkManagementInterface $linkManagement,
        protected Logger $logger,
        protected ProductRepositoryInterface $productRepository,
        protected CollectionFactory $productCollectionFactory
    ) {
        parent::__construct($context, $resultJsonFactory, $productFactory, $layout, $linkManagement);
    }

    /**
     * @inheritdoc
     */
    public function execute(): Json
    {
        $this->logger->info('----------Hyva Simulation-----------');
        $result = $this->resultJsonFactory->create();

        try {
            $params = $this->getRequest()->getParams();
            $productPrice = null;
            $product = $this->getProduct($params);
            $qty = null;
            if ($product !== null) {
                $qty = $params['qty'] ?? 1;
                $qty = (int)$qty;

                $productPrice = $product->getFinalPrice($qty);
                $productPrice = $productPrice * $qty;
            }

            $template = isset($params['wrapper']) ? self::HYVA_SIMULATION : self::HYVA_CONTENT;

            $block = $this->layout->createBlock(OneySimulationBlock::class)
                ->setTemplate($template)
                ->setAmount($productPrice)
                ->setQty($qty);

            $result->setData([
                'success' => true,
                'html' => $block->toHtml(),
            ]);
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage());
            $result->setData([
                'success' => false,
                'html' => $e->getMessage()
            ]);
        }

        return $result;
    }

    /**
     * Get product for oney simulation
     *
     * @throws \Exception
     */
    protected function getProduct(?array $params): ?ProductInterface
    {
        if (!isset($params['product'])) {
            return null;
        }

        $product = $this->productRepository->getById($params['product']);
        if (!$product->getId()) {
            throw new \Exception('Product not found');
        }

        if (empty($params['product_options']) || !is_array($params['product_options'])) {
            return $product;
        }

        $productOptions = $params['product_options'];
        $attributes = [];

        foreach ($productOptions as $productOption) {
            $attributeName = $productOption['attribute'] ?? '';
            $attributeValue = $productOption['value'] ?? '';
            if (empty($attributeName) || empty($attributeValue)) {
                return $product;
            }
            $attributes[] = [
                'name' => $attributeName,
                'value' => $attributeValue,
            ];
        }
        $simpleProducts = $this->linkManagement->getChildren($product->getSku());
        $simpleProductsIds = [];

        foreach ($simpleProducts as $simpleProduct) {
            $simpleProductsIds[] = $simpleProduct->getId();
        }

        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect(['entity_id', 'name', 'value']);
        $collection->addAttributeToFilter('entity_id', ['in' => $simpleProductsIds]);
        $simpleProductLoadedCollection = $collection->getItems();

        foreach ($simpleProductLoadedCollection as $loadedSimpleProduct) {
            foreach ($attributes as $attribute) {
                if ($loadedSimpleProduct->getData($attribute['name']) != $attribute['value']) {
                    continue 2;
                }
            }

            return $this->productRepository->getById($loadedSimpleProduct->getId());
        }

        return $product;
    }
}
