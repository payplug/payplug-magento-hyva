<?php

namespace Hyva\CheckoutPayplug\Model\Magewire\Payment;

use Hyva\Checkout\Model\Magewire\Component\EvaluationResultFactory;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultInterface;
use Hyva\Checkout\Model\Magewire\Payment\AbstractPlaceOrderService;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\PaymentException;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Quote\Model\Quote;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Sales\Api\OrderRepositoryInterface;
use Payplug\Exception\PayplugException;
use Payplug\Payments\Helper\Config;

class ApplepayPlaceOrderService extends AbstractPlaceOrderService
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

    protected $oneclick = false;

  /**
   * @var Config
   */
  private $payplugConfig;

    /**
     * @param CartManagementInterface $cartManagement
     * @param PaymentHelper $paymentHelper
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        CartManagementInterface $cartManagement,
        PaymentHelper $paymentHelper,
        OrderRepositoryInterface $orderRepository,
        \Magento\Framework\App\Action\Context $context,
        Config $payplugConfig
    ) {
        $this->paymentHelper = $paymentHelper;
        $this->orderRepository = $orderRepository;
        parent::__construct($cartManagement);
        $this->context = $context;
        $this->payplugConfig = $payplugConfig;

    }

    /**
     * @param Quote $quote
     * @param int|null $orderId
     * @return string
     */
    public function getRedirectUrl(Quote $quote, ?int $orderId = null): string
    {
        $order = $this->orderRepository->get($orderId);

        $checkoutUrl = $order->getPayment()->getAdditionalInformation('payment_url');
        if ($checkoutUrl) {
            return $checkoutUrl;
        } else {
          return parent::REDIRECT_PATH;
        }

    }

    public function canRedirect(): bool
    {
      return false;
    }

    public function placeOrder(Quote $quote): int
    {
      return (int) $this->cartManagement->placeOrder($quote->getId(), $quote->getPayment());
    }
    public function evaluateCompletion(EvaluationResultFactory $resultFactory, ?int $orderId = null): EvaluationResultInterface
    {

      // The order ID is required and will only be passed in if the order was created.
      if ($orderId) {

        // Best practice is always to create a batch to let others inject more if required.
        return $resultFactory->createBatch()->push(
          $resultFactory->createExecutable('make:pay-plug:payment')
        );

      }

      // Just let the abstraction layer dispatch a success result.
      return parent::evaluateCompletion($resultFactory, $orderId);
    }


}
