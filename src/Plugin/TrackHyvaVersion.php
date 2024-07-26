<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Plugin;

use Hyva\CheckoutPayplug\Provider\Config as PayplugHyvaConfig;
use Payplug\Core\HttpClient;
use Payplug\Payments\Helper\Config as PayplugMagentoConfig;
use Payplug\Payments\Helper\Http\AbstractClient;
use Psr\Log\LoggerInterface;

class TrackHyvaVersion
{
    public function __construct(
        protected PayplugMagentoConfig $payplugMagentoConfig,
        protected PayplugHyvaConfig $payplugHyvaConfig,
        protected LoggerInterface $logger
    ) {
    }

    public function afterPlaceRequest(AbstractClient $subject, array $result): array
    {
        HttpClient::addDefaultUserAgentProduct(
            'PayPlug-Magento2',
            $this->payplugMagentoConfig->getModuleVersion(),
            sprintf('Magento %s) %s (%s',
                $this->payplugMagentoConfig->getMagentoVersion(),
                $this->payplugHyvaConfig->getHyvaModuleName(),
                $this->payplugHyvaConfig->getCachedHyvaModuleVersion()
            )
        );

        return $result;
    }
}
