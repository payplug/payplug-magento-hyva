<?php

namespace Hyva\CheckoutPayplug\Controller\ApplePay;

use Magento\Checkout\Model\Session as SessionCheckout;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\PaymentException;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Sales\Model\Order;
use Hyva\CheckoutPayplug\Controller\Payment\AbstractPayment;
use Magento\Framework\App\Action\HttpGetActionInterface;

class getTransactionData extends AbstractPayment
{

    /**
     * Retrieve PayPlug Apple Pay transaction data
     *
     * @return Json
     */
    public function execute()
    {
        /** @var Json $response */
        $response = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $responseParams = [
            'merchand_data' => [],
            'error' => true,
            'message' => __('An error occurred while processing the order.'),
        ];

        try {
            $order = $this->getLastOrder();
            $merchandSession = $order->getPayment()->getAdditionalInformation('merchand_session');

            $order->getPayment()->unsAdditionalInformation('merchand_session');

            if (empty($merchandSession)) {
                throw new \Exception('Could not retrieve merchand session');
            }

            $response->setData([
                'merchand_data' => $merchandSession,
                'error' => false,
            ]);

            return $response;
        } catch (PayplugException $e) {
            $this->logger->error('Could not retrieve apple pay transaction data', [
                'message' => $e->__toString(),
                'exception' => $e,
            ]);
            $response->setData($responseParams);

            return $response;
        } catch (\Exception $e) {
            $this->logger->error('Could not retrieve apple pay transaction data', [
                'message' => $e->getMessage(),
                'exception' => $e,
            ]);
            $response->setData($responseParams);

            return $response;
        }
    }

    /**
     * Get last order
     *
     * @return Order
     *
     * @throws \Exception
     */
    private function getLastOrder()
    {

            $lastIncrementId = $this->getCheckout()->getLastRealOrderId();

            $orderId = $this->checkoutSession->getQuote()->getReservedOrderId();
        $quoteId = $this->checkoutSession->getQuote()->getId();



        if(!isset($lastIncrementId)) {
            $lastIncrementId = (int)$this->cartManagement->placeOrder($quoteId);

        }
        $quoteId = $this->checkoutSession->clearQuote();
            $order = $this->salesOrderFactory->create();
            $order->loadByIncrementId($lastIncrementId);



        if (!$order->getId()) {
            throw new \Exception(sprintf('Could not retrieve order with id %s', $lastIncrementId));
        }

        return $order;
    }
}
