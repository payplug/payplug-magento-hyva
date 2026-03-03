<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

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

        $order = $this->orderRepository->get($orderId);

        $checkoutUrl = $order->getPayment()->getAdditionalInformation('payment_url');
        if ($checkoutUrl) {
            return $checkoutUrl;
        } else {
          return parent::REDIRECT_PATH;
        }

    }

    public function placeOrder(Quote $quote): int
    {
        return (int) $this->cartManagement->placeOrder($quote->getId(), $quote->getPayment());
    }

}
