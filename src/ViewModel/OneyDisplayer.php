<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Payplug\Payments\Helper\Oney;

class OneyDisplayer implements ArgumentInterface
{
    public function __construct(
        private Oney $oney
    ) {
    }

    public function canDisplayOney(): bool
    {
        return $this->oney->canDisplayOney();
    }
}
