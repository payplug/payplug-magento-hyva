<?php

namespace Hyva\CheckoutPayplug\Model\Config\Source;

use Payplug\Payments\Helper\Config;

class PaymentPage implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Get available payment behavior
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            [
                'value' => Config::PAYMENT_PAGE_INTEGRATED,
                'label' => __('PayPlug embedded payment'),
            ],
            [
                'value' => Config::PAYMENT_PAGE_REDIRECT,
                'label' => __('PayPlug redirected payment'),
            ],
        ];

        return $options;
    }
}
