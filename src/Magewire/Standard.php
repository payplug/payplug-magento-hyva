<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Magewire;

use Hyva\Checkout\Magewire\Main;

class Standard extends Main
{

  /**
  *
  * @param string $card_id
  * @return void
  */
  public function setAditionalData($card_id)
  {
    $quote = $this->sessionCheckout->getQuote();
    $quote->getPayment()->setAdditionalInformation('payplug_payments_customer_card_id', $card_id);
    $quote->getPayment()->save();

  }



}
