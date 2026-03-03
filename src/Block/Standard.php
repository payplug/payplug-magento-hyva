<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

namespace Hyva\CheckoutPayplug\Block;

use Magento\Customer\Model\Session;
use Magento\Framework\Locale\ResolverInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Payplug\Payments\Helper\Card;
use Payplug\Payments\Model\Customer\Card as CustomerCard;
use Payplug\Payments\Model\Payment\Standard\ConfigProvider as Config;

class Standard extends Template
{
    public function __construct(
        private Context $context,
        private Session $customerSession,
        private Card $helper,
        private Config $config,
        private ResolverInterface $localeResolver,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getConfig(): array
    {
        return $this->config->getConfig();
    }

    /**
     * Override the Hyva payment cards logo if we are on the IT local
     */
    protected function _prepareLayout(): self
    {
        parent::_prepareLayout();

        if ($this->localeResolver->getLocale() === 'it_IT') {
            $metadata = $this->getData('metadata');
            $metadata['icon']['src'] = 'Payplug_Payments::images/standard/payment-cards-it.svg';
            $metadata['icon']['attributes']['alt'] = 'Visa Mastercard Postepay';
            $this->setData('metadata', $metadata);
        }

        return $this;
    }

    /**
     * Get customer saved PayPlug cards
     *
     * @return CustomerCard[]
     */
    public function getPayplugCards(): array
    {
        return $this->helper->getCardsByCustomer($this->customerSession->getCustomer()->getId(), true);
    }

    /**
     * Format card expiration date
     */
    public function getFormattedExpDate(string $date): string
    {
        return $this->helper->getFormattedExpDate($date);
    }

    /**
     * Build delete card url
     */
    public function getDeleteCardUrl(int $customerCardId): string
    {
        return $this->_urlBuilder->getUrl('payplug_payments/customer/cardDelete', [
            'customer_card_id' => $customerCardId
        ]);
    }
}
