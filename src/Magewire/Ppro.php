<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Magewire;

use Hyva\Checkout\Magewire\Main;

class Ppro extends Main
{
    public function getQuote()
    {
        $quote = $this->sessionCheckout->getQuote();
        return $quote;
    }
}
