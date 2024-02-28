<?php

declare(strict_types=1);

namespace Hyva\CheckoutPayplug\Model\Magewire\Payment\Method;

use Magewirephp\Magewire\Component;
use \Payplug\Payments\Model\Payment\Standard\ConfigProvider as Config;

class Standard extends Component
{
  private $config;


  public function __construct( Config $config ){
    $this->config = $config;
  }

  public function getConfig(): array
  {
    return $this->config->getConfig();
  }

}
