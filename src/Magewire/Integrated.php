<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Magewire;

use Magewirephp\Magewire\Component;
use Magento\Checkout\Model\Session as SessionCheckout;

class Integrated extends Component
{
    /**
     * @var SessionCheckout;
     */
    protected $sessionCheckout;

    /**
     * @param SessionCheckout $sessionCheckout
     */
    public function __construct(
        SessionCheckout $sessionCheckout
    ){
        $this->sessionCheckout = $sessionCheckout;
    }

}
