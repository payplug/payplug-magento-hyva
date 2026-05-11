<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Magewire;

use Hyva\Checkout\Magewire\Main;

class Oney extends Main
{
    /**
     *
     * @param string $oney_type
     * @return void
     */
    public function setOneyType($oney_type)
    {
        $quote = $this->sessionCheckout->getQuote();
        $quote->getPayment()->setAdditionalInformation(
            'payplug_payments_oney_option',
            $oney_type
        );
        $quote->getPayment()->save();
    }

}
