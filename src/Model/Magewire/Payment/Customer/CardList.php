<?php

namespace Hyva\CheckoutPayplug\Model\Magewire\Payment\Customer;


use Magento\Customer\Model\Session;
use \Payplug\Payments\Helper\Card;
use Magewirephp\Magewire\Component;

class CardList extends Component
{
    /**
     * @var Card
     */
    private $helper;

    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @param Template\Context $context
     * @param Session          $customerSession
     * @param Card             $helper
     * @param array            $data
     */
    public function __construct(Session $customerSession, Card $helper, array $data = [])
    {
        $this->customerSession = $customerSession;
        $this->helper = $helper;
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
