<?php
declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Magewire\Payment\Method;

use Hyva\Checkout\Model\Magewire\Component\EvaluationInterface as EvaluationInterface;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultFactory;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultInterface;
use Magento\Checkout\Model\Session as SessionCheckout;
use Magewirephp\Magewire\Component;

class Oney extends Component implements EvaluationInterface {
    private SessionCheckout $sessionCheckout;

    public function __construct(SessionCheckout $sessionCheckout)
    {
        $this->sessionCheckout = $sessionCheckout;
    }

    public function evaluateCompletion(EvaluationResultFactory $factory): EvaluationResultInterface
    {
        $quote = $this->sessionCheckout->getQuote();

         dd($quote->getPayment());

        return $factory->createBlocking();
        // If this payment method is selected, only return a Success if all required data is present
        /*return $this->isRequiredDataPresent()
            ? $factory->createSuccess()
            : $factory->createBlocking();*/
    }
}
