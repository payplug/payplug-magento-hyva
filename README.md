
# magento2-hyva-checkout-payplug
Hyvä Compatibility module for Payplug_Payments

## Installation 

### Via packagist.com

Hyvä Compatibility modules that are tagged as stable can be installed using composer via packagist.com (accessible for all Hyvä Checkout licensees):

1. Install via composer
    ```
    composer require hyva-themes/magento2-hyva-checkout-payplug
    ```
2. Enable module
    ```
    bin/magento setup:upgrade
    bin/magento hyva:config:generate

    #you need to run following command only in production mode 
   ./bin/magento setup:di:compile
   ./bin/magento setup:static-content:deploy --force fr_FR it_IT en_US
   ./bin/magento cache:clean
    ```


### Via gitlab

For development of or to contribute to this module, it needs to be installed using composer via gitlab.
This installation method is not suited for deployments, because gitlab requires SSH key authorization.

1. Install Hyva Theme and all dependencies via composer
    If this is the first time a compatibility module is installed via gitlab, the compat-module-fallback git repository has to be added as a
    composer repository. This step is only required once.
    ```
    composer config repositories.hyva-themes/magento2-theme-module git git@gitlab.hyva.io:hyva-themes/magento2-theme-module.git
   composer config repositories.hyva-themes/magento2-reset-theme git git@gitlab.hyva.io:hyva-themes/magento2-reset-theme.git
   composer config repositories.hyva-themes/magento2-email-module git git@gitlab.hyva.io:hyva-themes/magento2-email-module.git
   composer config repositories.hyva-themes/magento2-default-theme git git@gitlab.hyva.io:hyva-themes/magento2-default-theme.git
   composer config repositories.hyva-themes/magento2-hyva-checkout-payplug git git@gitlab.hyva.io:hyva-themes/magento2-hyva-checkout-payplug
    ```
2. Install Payplug Hyva Checkout

    ```
   composer require hyva-themes/magento2-hyva-checkout-payplug --prefer-source

    ```

3. Enable module
    ```
    ./bin/magento setup:upgrade
    ./bin/magento hyva:config:generate
   ./bin/magento setup:di:compile
   ./bin/magento setup:static-content:deploy --force fr_FR it_IT en_US
   ./bin/magento cache:clean
    ```
