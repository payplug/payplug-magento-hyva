<?php
declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Model\Magewire\Payment\Method;

use Magewirephp\Magewire\Component;
use \Payplug\Payments\Model\Payment\Standard\ConfigProvider as Config;
use Hyva\Checkout\Model\Session;
use \Payplug\Payments\Helper\Card;
use Hyva\Checkout\Magewire\Main;

class Standard extends Component
{
  private $config;


  public function __construct( Config $config, Session $customerSession, Card $helper ){
    $this->config = $config;
    $this->customerSession = $customerSession;
    $this->helper = $helper;
  }

  public function getConfig(): array
  {
    return $this->config->getConfig();
  }

  /**
   * Get customer saved PayPlug cards
   *
   * @return \Payplug\Payments\Model\Customer\Card[]
   */
  public function getPayplugCards()
  {
    return $this->helper->getCardsByCustomer($this->customerSession->getCustomer()->getId(), true);
  }

  /**
   * Format card expiration date
   *
   * @param string $date
   *
   * @return string
   */
  public function getFormattedExpDate($date)
  {
    return $this->helper->getFormattedExpDate($date);
  }

  /**
   *
   * @param string $oney_type
   * @return void
   */
  public function saveAdditionalInformation($card_id){

    $quote = $this->customerSession->getQuote();
    $quote->getPayment()->setAdditionalInformation('payplug_payments_customer_card_id', $card_id );
    $quote->getPayment()->save();
  }

}
