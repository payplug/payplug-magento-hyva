<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Plugin;

use Hyva\CheckoutPayplug\Provider\Config as PayplugHyvaConfig;
use Payplug\Payments\Helper\Config;
use Psr\Log\LoggerInterface;

class TrackHyvaVersion
{
    public function __construct(
        protected PayplugHyvaConfig $payplugHyvaConfig,
        protected LoggerInterface $logger
    ) {
    }

    public function afterGetMagentoVersion(Config $subject, string $magentoVersion): string
    {
        return sprintf('%s) %s (%s',
            $magentoVersion,
            $this->payplugHyvaConfig->getHyvaModuleName(),
            $this->payplugHyvaConfig->getHyvaModuleVersion()
        );
    }
}
