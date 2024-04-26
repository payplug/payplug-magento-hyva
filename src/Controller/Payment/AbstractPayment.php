<?php

namespace Hyva\CheckoutPayplug\Controller\Payment;

use Payplug\Payments\Helper\Data;
use Payplug\Payments\Logger\Logger;
use \Magento\Quote\Api\CartManagementInterface;
use Magento\Checkout\Model\Session as SessionCheckout;


abstract class AbstractPayment extends \Magento\Framework\App\Action\Action
{
  /**
   * @var SessionCheckout
   */
    private $sessionCheckout;

  /**
   * @var \Magento\Sales\Model\OrderFactory
   */
  protected $salesOrderFactory;

  /**
   * @var Logger
   */
  protected $logger;

  /**
   * @var Data
   */
  protected $payplugHelper;

  /**
   * @param \Magento\Framework\App\Action\Context $context
   * @param \Magento\Checkout\Model\Session       $checkoutSession
   * @param \Magento\Sales\Model\OrderFactory     $salesOrderFactory
   * @param Logger                         §       $logger
   * @param Data                                  $payplugHelper
   */
  public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Checkout\Model\Session $checkoutSession,
    \Magento\Sales\Model\OrderFactory $salesOrderFactory,
    Logger $logger,
    Data $payplugHelper,
    CartManagementInterface $cartManagement
  ) {
    parent::__construct($context);
    $this->checkoutSession = $checkoutSession;
    $this->salesOrderFactory = $salesOrderFactory;
    $this->logger = $logger;
    $this->payplugHelper = $payplugHelper;
    $this->cartManagement = $cartManagement;
  }

  /**
   * Get quote
   *
   * @return mixed
   */
  protected function getQuote()
  {
    return $this->getCheckout()->getQuote();
  }

  /**
   * Get checkout session namespace
   *
   * @return \Magento\Checkout\Model\Session
   */
  protected function getCheckout()
  {
    return $this->checkoutSession;
  }

}
