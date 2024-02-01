<?php

namespace Hyva\CheckoutPayplug\Model\Magewire\Payment;

use Hyva\Checkout\Model\Magewire\Payment\AbstractPlaceOrderService;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\PaymentException;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Quote\Model\Quote;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Sales\Api\OrderRepositoryInterface;
use Payplug\Exception\PayplugException;

class PlaceOrderService extends AbstractPlaceOrderService
{
    /**
     * @var PaymentHelper
     */
    protected $paymentHelper;

    /**
     * @var OrderRepositoryInterface
     */
    protected $orderRepository;

    /**
     * @var \Magento\Framework\Controller\ResultFactory
     */
    protected $resultFactory;

    protected $context;

    protected $orderId = null;

    protected $quote = null;

    /**
     * @param CartManagementInterface $cartManagement
     * @param PaymentHelper $paymentHelper
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        CartManagementInterface $cartManagement,
        PaymentHelper $paymentHelper,
        OrderRepositoryInterface $orderRepository,
        \Magento\Framework\App\Action\Context $context
    ) {
        $this->paymentHelper = $paymentHelper;
        $this->orderRepository = $orderRepository;
        parent::__construct($cartManagement);
        $this->context = $context;
    }

    /**
     * @param Quote $quote
     * @param int|null $orderId
     * @return string
     */
    public function getRedirectUrl(Quote $quote, ?int $orderId = null): string
    {
        $paymentMethod = $this->paymentHelper->getMethodInstance($quote->getPayment()->getMethod());

        $this->orderId = $orderId;
        $this->quote = $quote;

        $order = $this->orderRepository->get($orderId);

      //  dd($quote->getPayment()->getMethod());
        $checkoutUrl = $order->getPayment()->getAdditionalInformation('payment_url');
        if ($checkoutUrl) {
            return $checkoutUrl;
        } else {
          return parent::REDIRECT_PATH;
        }

    }

    public function placeOrder(Quote $quote): int
    {
        $this->resultFactory = $this->context->getResultFactory();
        /** @var Json $response */
        $response = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        $orderId = (int) $this->cartManagement->placeOrder($quote->getId(), $quote->getPayment());
        $order = $this->orderRepository->get($orderId);

        $responseParams = [
           // 'url' => $this->_url->getUrl('payplug_payments/payment/cancel', ['is_canceled_by_provider' => true]),
            'error' => true,
            'message' => __('An error occurred while processing the order.')
        ];

        try {
            $order = $this->orderRepository->get($orderId);
            $url = $order->getPayment()->getAdditionalInformation('payment_url');
            $order->getPayment()->unsAdditionalInformation('payment_url');

            $payment = $order->getPayment();

            $isPaid = (bool)$order->getPayment()->getAdditionalInformation('is_paid', false);
            $order->getPayment()->unsAdditionalInformation('is_paid');

            if ($isPaid) {
                $response->setData([
                    'is_paid' => true,
                    'error' => false,
                ]);

                dd($response);
            }

            if (empty($url)) {
                $paymentId = $order->getPayment()->getAdditionalInformation('payplug_payment_id');
                $order->getPayment()->unsAdditionalInformation('payplug_payment_id');

                if (empty($paymentId)) {
                    throw new \Exception('Could not retrieve payment id for integrated payment');
                }
                $response->setData([
                    'payment_id' => $paymentId,
                    'error' => false,
                ]);

                return $orderId;
            }

            if (empty($url)) {
                throw new \Exception('Could not retrieve payment url');
            }


            $response->setData([
                'url' => $url,
                'error' => false,
            ]);

            dd($response);
        } catch (PayplugException $e) {
            $payment->logger->error($e->__toString());

            $response->setData($responseParams);

            dd($response);
        } catch (PaymentException $e) {
            $payment->logger->error($e->getMessage());


            $response->setData($responseParams);

            dd($response);
        } catch (\Exception $e) {
            $payment->logger->error($e->getMessage());


            $response->setData($responseParams);

            dd($response);
        }
    }

}
