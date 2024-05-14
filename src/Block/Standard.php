<?php
namespace Hyva\CheckoutPayplug\Block;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Element\Template;
use Payplug\Payments\Helper\Card;
use Payplug\Payments\Model\Payment\Standard\ConfigProvider as Config;

class Standard extends Template
{
  /**
   * @var Card
   */
  private $helper;

  /**
   * @var Session
   */
  private $customerSession;

  private $config;

  /**
   * @param Template\Context $context
   * @param Session          $customerSession
   * @param Card             $helper
   * @param array            $data
   */
  public function __construct(
    Template\Context $context,
    Session $customerSession,
    Card $helper,
    Config $config,
    array $data = [])
  {
    parent::__construct($context, $data);

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
   * Build delete card url
   *
   * @param int $customerCardId
   *
   * @return string
   */
  public function getDeleteCardUrl($customerCardId)
  {
    return $this->_urlBuilder->getUrl('payplug_payments/customer/cardDelete', [
      'customer_card_id' => $customerCardId
    ]);
  }



}
