<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Setup;

use Hyva\CheckoutPayplug\Provider\Config;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class RecurringData implements InstallDataInterface
{
    public function __construct(
        protected Config $config
    ) {
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context): void
    {
        $setup->startSetup();

        $data = [
            'scope' => 'default',
            'scope_id' => 0,
            'path' => Config::HYVA_VERSION_XML_PATH,
            'value' => $this->config->getHyvaModuleVersionFromComposer()
        ];
        $setup->getConnection()->insertOnDuplicate($setup->getTable('core_config_data'), $data, ['value']);

        $setup->endSetup();
    }
}
