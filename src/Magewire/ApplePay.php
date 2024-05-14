<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Magewire;

use Hyva\Checkout\Magewire\Main;

class ApplePay extends Main
{

    /**
     *
     * @param string $oney_type
     * @return void
     */
    public function getShipping()
    {
        $quote = $this->sessionCheckout->getQuote();
        return $quote;
    }

}
