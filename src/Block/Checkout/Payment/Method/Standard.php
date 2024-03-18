<?php
/*
 * Hyvä Themes - https://hyva.io
 *  Copyright © Hyvä Themes 2023-present. All rights reserved.
 *  This product is licensed per Magento install
 *  See https://hyva.io/license
 */

namespace Hyva\CheckoutPayplug\Block\Checkout\Payment\Method;

use Payplug\Payments\Gateway\Config\PayplugPayment as PayplugConfigProvider;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Quote\Api\CartRepositoryInterface;
use Magewirephp\Magewire\Component;

class Standard extends Component
{
  private CheckoutSession $checkoutSession;

  private CartRepositoryInterface $cartRepository;

  private PayplugConfigProvider $config;

  public function __construct(
    CheckoutSession $checkoutSession,
    CartRepositoryInterface $cartRepository,
    PayplugConfigProvider $config
  ) {
    $this->checkoutSession = $checkoutSession;
    $this->cartRepository = $cartRepository;
    $this->config = $config;
  }

  public function getConfig(): array
  {
    return $this->config->get();
  }

  /**
   * @return PayplugConfigProvider
   */
  public function getPayplugConfigProvider()
  {

    return $this->config;
  }





}
