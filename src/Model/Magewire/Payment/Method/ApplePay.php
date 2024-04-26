<?php
declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Model\Magewire\Payment\Method;

use Magewirephp\Magewire\Component;
use \Payplug\Payments\Model\Payment\Standard\ConfigProvider as Config;
use Magento\Customer\Model\Session;
use Hyva\Checkout\Magewire\Main;
use Magento\Checkout\Model\Session as SessionCheckout;

class ApplePay extends Component
{
    private $config;


    public function __construct( Config $config, Session $customerSession){
        $this->config = $config;
        $this->customerSession = $customerSession;
    }

    public function getConfig(): array
    {
        return $this->config->getConfig();
    }



}
