# Payplug for Hyvä

Official compatibility module of [Magento 2 Payplug module](https://github.com/payplug/payplug-magento2/) for Hyvä.

## About Payplug

[Payplug](https://www.payplug.com/fr/) is a French omnichannel payment solution dedicated to small and medium-sized businesses and enabling the cashing of payments made via Visa, Mastercard, and CB credit cards. 15,000 merchants in Europe trust us daily.

Please refer to https://www.payplug.com/fr for more informations.

## Requirements

In order to work, this module requires a [Hyvä Checkout](https://www.hyva.io/hyva-checkout.html) licence.

Please refer to https://docs.hyva.io for more instructions.

## Installation

1 - Install the payplug-magento-hyva module via composer:

```bash
composer require payplug/payplug-magento-hyva
```

2 - Enable module:

```bash
bin/magento module:enable Hyva_CheckoutPayplug
bin/magento setup:upgrade
```

3 - Generate Tailwind CSS styles:

```bash
# Register module to Hyvä Tailwind config
bin/magento hyva:config:generate

# Replace path by your Hyvä custom theme
cd path/to/project/app/design/frontend/Vendor/default/web/tailwind

# Compile Tailwind CSS file
npm run build
```
