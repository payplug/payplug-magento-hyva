<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Model\Magewire\Payment;

use Hyva\Checkout\Model\Magewire\Component\EvaluationResultFactory;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultInterface;
use Hyva\Checkout\Model\Magewire\Payment\AbstractPlaceOrderService;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Quote\Model\Quote;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Sales\Api\OrderRepositoryInterface;
use Payplug\Payments\Helper\Config;

class DeferPlaceOrderService extends AbstractPlaceOrderService
{
    /**
     * @var ResultFactory
     */
    protected $resultFactory;
    protected $orderId = null;
    protected $quote = null;
    protected $oneclick = false;

    public function __construct(
        protected CartManagementInterface $cartManagement,
        protected PaymentHelper $paymentHelper,
        protected OrderRepositoryInterface $orderRepository,
        protected Context $context,
        protected Config $payplugConfig
    ) {
        parent::__construct($cartManagement);
    }

    public function getRedirectUrl(Quote $quote, ?int $orderId = null): string
    {
        $paymentMethod = $this->paymentHelper->getMethodInstance($quote->getPayment()->getMethod());

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
        if (($this->payplugConfig->isIntegrated() && $this->oneclick) || $this->isRedirect() || ($this->isPopup() && $this->oneclick)) {
            return true;
        }

        return false;
    }

    public function isRedirect(): bool
    {
        return !$this->isPopup() && !$this->payplugConfig->isIntegrated();
    }

    public function isPopup(): bool
    {
        return $this->payplugConfig->isEmbedded();
    }

    public function placeOrder(Quote $quote): int
    {
        $payment = $quote->getPayment()->getAdditionalInformation();
        if (!empty($payment["payplug_payments_customer_card_id"])) {
            $this->oneclick = true;
        }

        return (int)$this->cartManagement->placeOrder($quote->getId(), $quote->getPayment());
    }

    public function evaluateCompletion(EvaluationResultFactory $resultFactory, ?int $orderId = null): EvaluationResultInterface
    {

        if (!$this->payplugConfig->isIntegrated() || $this->oneclick) {
            return parent::evaluateCompletion($resultFactory, $orderId);
        }

        // The order ID is required and will only be passed in if the order was created.
        if ($orderId) {

            // Best practice is always to create a batch to let others inject more if required.
            return $resultFactory->createBatch()->push($resultFactory->createExecutable('make:pay-plug:payment'));
        }

        // Just let the abstraction layer dispatch a success result.
        return parent::evaluateCompletion($resultFactory, $orderId);
    }
}
