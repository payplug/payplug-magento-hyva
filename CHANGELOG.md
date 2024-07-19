# Changelog - Hyvä compatibility module for Payplug payments

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.2](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/commits/1.0.2) - 2024-07-19

### Features

* Bug fixes
* Oney payment optimizations, improvements
* Security improvements

**[View diff](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/compare/1.0.1...1.0.2)**

### Added

- Add `CHANGELOG.md` [#37](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/37)
- Add `escapeJS` when possible and normalize `getUrl()` instead of `getBaseUrl` [#31](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/31)
- Add missing Hyva config generation in readme [#33](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/33)
- Add Oney styles nesting [#33](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/33)
- Add payment options tabs behavior on desktop onestep layout [#33](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/33)
- Add secure-magenta.dalenys.com in CSP whitelist [#36](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/36)
- Add standard payment styles nesting [#35](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/35)

### Changed

- Clean Oney payment template header [#32](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/32)
- Clean hyva checkout layout indentation [#28](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/28)
- Deport Oney styles to dedicated CSS file and remove useless rules [#33](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/33)
- Deport standard payment styles to dedicated CSS file [#35](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/35)
- Optimize and clean Oney payment script [#34](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/34)
- Prevent injections in templates [#31](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/31)
- Refacto post review [#31](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/31)
- Resolve merge conflict and add uses for oney [#31](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/31)
- Tailwindify Oney payment styles [#35](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/35)
- Tailwindify standard payment styles [#35](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/35)
- Update Oney payment template indentation [#32](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/32)
- Use an `escapeJS` in javascript to escape the domain [#31](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/31)

### Fixed

- Fix Oney option value null on first radio select [#34](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/34)

### Removed

- Remove empty `.xml` layout [#28](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/28)
- Remove Oney banner display on product view and shopping cart [#30](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/30)
- Remove `oney.js` file call on shopping cart and product view [#28](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/28)
- Remove residual console log [#29](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/29)
- Remove standard payment styles vendor prefixes [#35](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/35)
- Remove useless Oney popin CSS rules [#32](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/32)

## [1.0.1](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/commits/1.0.1) - 2024-06-20

### Features

* Update readme

## [1.0.0](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/commits/1.0.0) - 2024-05-14

### Features

* Standard payment support
* Oney payment support
* PPRO payment support
* Apple Pay payment support