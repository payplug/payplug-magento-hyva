<?php
/**
 * Payplug - https://www.payplug.com/
 * Copyright © Payplug. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Setup;

use Hyva\CheckoutPayplug\Provider\Config;
use Magento\Framework\App\ScopeInterface;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Component\ComponentRegistrarInterface;
use Magento\Framework\Filesystem\Directory\ReadFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Store\Model\Store;

class RecurringData implements InstallDataInterface
{
    public function __construct(
        protected Config $config,
        protected ComponentRegistrarInterface $componentRegistrar,
        protected ReadFactory $readFactory
    ) {
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context): void
    {
        $data = [
            'scope' => ScopeInterface::SCOPE_DEFAULT,
            'scope_id' => Store::DEFAULT_STORE_ID,
            'path' => Config::HYVA_VERSION_XML_PATH,
            'value' => $this->getHyvaModuleVersionFromComposer()
        ];
        $setup->getConnection()->insertOnDuplicate($setup->getTable('core_config_data'), $data, ['value']);
    }

    private function getHyvaModuleVersionFromComposer(): string
    {
        $srcPath = $this->componentRegistrar->getPath(
            ComponentRegistrar::MODULE,
            $this->config->getHyvaModuleName()
        );

        //Hyva modules are into src folder, and the composer.json is outside of the src
        $paths = explode('/', $srcPath);
        //Poping the src folder
        array_pop($paths);
        $path = implode('/', $paths);
        $directoryRead = $this->readFactory->create($path);

        $composerJsonData = '';
        if ($directoryRead->isFile('composer.json')) {
            $composerJsonData = $directoryRead->readFile('composer.json');
        }
        $data = json_decode($composerJsonData);

        return !empty($data->version) ? $data->version : '';
    }
}
