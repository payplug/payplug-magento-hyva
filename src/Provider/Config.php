<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Provider;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Module\ResourceInterface;

class Config
{
    private const HYVA_MODULE_NAME = 'Hyva_CheckoutPayplug';
    public const HYVA_VERSION_XML_PATH = 'hyva/checkout_payplug/version';

    public function __construct(
        protected ScopeConfigInterface $config,
        protected ResourceInterface $moduleResource,
        protected ScopeConfigInterface $scopeConfig
    ) {
    }

    public function getHyvaModuleVersion(): string
    {
        return (string)$this->scopeConfig->getValue(self::HYVA_VERSION_XML_PATH);
    }

    public function getHyvaModuleName(): string
    {
        return Config::HYVA_MODULE_NAME;
    }
}
