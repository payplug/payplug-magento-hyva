<?php

namespace Hyva\CheckoutPayplug\Block\Checkout\Payment\Method;

use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;
use Payplug\Payments\Gateway\Config\PayplugPayment as PayplugConfigProvider;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Locale\Resolver as LocaleResolver;

class Integrated extends \Magento\Framework\View\Element\Template {

    /**
     * @var PayplugConfig
     */
    protected $payplugConfig;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var LocaleResolver
     */
    protected $localeResolver;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        PayplugConfigProvider $payplugConfigProvider,
        StoreManagerInterface $storeManager,
        LocaleResolver $localeResolver,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->payplugConfig = $payplugConfigProvider;
        $this->localeResolver = $localeResolver;
        $this->storeManager = $storeManager;

        $this->payment_url = $this->storeManager->getStore()->getBaseUrl()."payplug_payments/payment/standard"."?should_redirect=0&integrated=1";


    }

    /**
     * @return PayplugConfigProvider
     */
    public function getPayplugConfigProvider()
    {

        return $this;
    }

}

