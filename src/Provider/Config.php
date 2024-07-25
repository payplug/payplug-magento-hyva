<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Provider;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Component\ComponentRegistrarInterface;
use Magento\Framework\Filesystem\Directory\ReadFactory;
use Magento\Framework\Module\ResourceInterface;

class Config
{
    /**
     * Module Name
     */
    public const HYVA_MODULE_NAME = 'Hyva_CheckoutPayplug';

    public function __construct(
        protected ScopeConfigInterface $config,
        protected ResourceInterface $moduleResource,
        protected ComponentRegistrarInterface $componentRegistrar,
        protected ReadFactory $readFactory
    ) {
    }

    public function getHyvaVersion(): string
    {
        $srcPath = $this->componentRegistrar->getPath(
            ComponentRegistrar::MODULE,
            Config::HYVA_MODULE_NAME
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

    public function getHyvaModuleName(): string
    {
        return Config::HYVA_MODULE_NAME;
    }
}
