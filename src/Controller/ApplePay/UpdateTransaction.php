<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Controller\ApplePay;

use Magento\Checkout\Model\Session;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Data\Form\FormKey\Validator;
use Magento\Framework\Exception\PaymentException;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\OrderFactory;
use Payplug\Exception\PayplugException;
use Payplug\Payments\Controller\Payment\AbstractPayment;
use Payplug\Payments\Helper\Data;
use Payplug\Payments\Logger\Logger;

class UpdateTransaction extends AbstractPayment
{
    public function __construct(
        protected RequestInterface $request,
        protected Validator $formKeyValidator,
        Context $context,
        Session $checkoutSession,
        OrderFactory $salesOrderFactory,
        Logger $logger,
        Data $payplugHelper
    ) {
        parent::__construct($context, $checkoutSession, $salesOrderFactory, $logger, $payplugHelper);
    }

    /**
     * Update PayPlug Apple Pay transaction data
     *
     * @return Json
     */
    public function execute(): Json
    {
        /** @var Json $response */
        $response = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $response->setData([
            'error' => true,
            'message' => (string)__('An error occurred while processing the order.'),
        ]);

        $formKeyValidation = $this->formKeyValidator->validate($this->request);
        if (!$formKeyValidation) {
            return $response;
        }

        try {
            $order = $this->getLastOrder();
            $token = json_decode($this->getRequest()->getParam('token'));
            if (empty($token)) {
                throw new \Exception('Could not retrieve token');
            }

            $payplugPayment = $this->payplugHelper->getOrderPayment($order->getIncrementId());
            $updatedPayment = $payplugPayment->update([
                'apple_pay' => [
                    'payment_token' => $token,
                ],
            ]);

            if ($updatedPayment->is_paid) {
                $response->setData([
                    'error' => false,
                ]);
            }

            return $response;
        } catch (PayplugException $e) {
            $this->logger->error('Could not update apple pay transaction', [
                'message' => $e->__toString(),
                'exception' => $e,
            ]);

            return $response;
        } catch (\Exception $e) {
            $this->logger->error('Could not update apple pay transaction', [
                'message' => $e->getMessage(),
                'exception' => $e,
            ]);

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
    private function getLastOrder(): Order
    {
        $lastIncrementId = $this->getCheckout()->getLastRealOrderId();

        if (!$lastIncrementId) {
            throw new \Exception('Could not retrieve last order id');
        }
        $order = $this->salesOrderFactory->create();
        $order->loadByIncrementId($lastIncrementId);

        if (!$order->getId()) {
            throw new \Exception(sprintf('Could not retrieve order with id %s', $lastIncrementId));
        }

        return $order;
    }
}
