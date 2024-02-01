<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\ViewModel;

use Hyva\Theme\ViewModel\SvgIcons;

class PayplugIcons extends SvgIcons
{
    public function __construct()
    {
        parent::construct();
        $this->iconPathPrefix = "Hyva_CheckoutPayPlug::svg/payplugIcons";
    }
}
