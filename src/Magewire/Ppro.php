<?php
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
