<?php
namespace Hyva\CheckoutPayplug\Block;

use Magento\Framework\View\Element\Template;
use Payplug\Payments\Helper\Data as Data;
use Payplug\Payments\Model\Payment\ApplePay\ConfigProvider as Config;

use Magento\Checkout\Model\Session as SessionCheckout;

class ApplePay extends Template
{
    /**
     * @var Data
     */
    private $helper;


    private $config;
    /**
     * @var SessionCheckout
     */
    private $sessionCheckout;

    public function __construct(
        Template\Context $context,
        \Magento\Checkout\Model\Session  $customerSession,
        Data $helper,
        array $data = [],
        Config $config)
    {
        parent::__construct($context, $data);

        $this->config = $config;
        $this->helper = $helper;
        $this->sessionCheckout = $customerSession;
    }

    public function getConfig()
    {
        return $this->config->getConfig();
    }

    public function getBaseUrl(){
      return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
    }


    public function getOrderId()
    {
        return $this->sessionCheckout->get;
    }


}
