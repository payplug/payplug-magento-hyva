<?php
namespace Hyva\CheckoutPayplug\Block;

use Magento\Framework\View\Element\Template;
use \Payplug\Payments\Model\Payment\Standard\ConfigProvider as StandardConfigProvider;
use \Payplug\Payments\Model\Payment\Sofort\ConfigProvider as SofortConfigProvider;
use \Payplug\Payments\Model\Payment\Amex\ConfigProvider as AmexConfigProvider;
use \Payplug\Payments\Model\Payment\Bancontact\ConfigProvider as BancontactConfigProvider;
use \Payplug\Payments\Model\Payment\Giropay\ConfigProvider as GiropayConfigProvider;
use \Payplug\Payments\Model\Payment\Ideal\ConfigProvider as IdealConfigProvider;
use \Payplug\Payments\Model\Payment\Mybank\ConfigProvider as MybankConfigProvider;
use \Payplug\Payments\Model\Payment\Satispay\ConfigProvider as SatispayConfigProvider;

class Standard extends Template {

    protected $StandardConfigProvider;

    protected $paymentMethod;


    public function __construct(Template\Context $context,
                                StandardConfigProvider $StandardConfigProvider,
                                SofortConfigProvider $SofortConfigProvider,
                                AmexConfigProvider $AmexConfigProvider,
                                BancontactConfigProvider $BancontactConfigProvider,
                                GiropayConfigProvider $GiropayConfigProvider,
                                IdealConfigProvider $IdealConfigProvider,
                                MybankConfigProvider $MybankConfigProvider,
                                SatispayConfigProvider $SatispayConfigProvider,
                                array $data = [])
    {
        parent::__construct($context, $data);

        $this->paymentMethod = $this->getData('paymentMethod');

        if (isset($this->paymentMethod)) {
            $methodProvider = $this->paymentMethod."ConfigProvider";
            $this->$methodProvider = ${$methodProvider};
        }
    }

    public function getService() {

        $method = "payplug_payments_".strtolower($this->paymentMethod);
        $methodProvider = $this->paymentMethod."ConfigProvider";

        return $this->$methodProvider->getConfig()['payment'][$method];

    }

}
