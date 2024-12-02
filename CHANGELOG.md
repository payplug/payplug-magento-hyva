# Changelog - Hyvä compatibility module for Payplug payments

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.1.0](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/commits/1.1.0) - 2024-12-XX

### Main features

* Add standard payment method pop-up option

**[View diff](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/compare/1.0.5...1.1.0)**

### Added
- Add standard payment method pop-up option [#69](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/69)

**[View diff](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/compare/1.0.5...1.1.0)**

## [1.0.5](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/commits/1.0.5) - 2024-11-13

### Fixes
- Hotfix missing payplug domain JS variable [#63](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/63)

**[View diff](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/compare/1.0.4...1.0.5)**

## [1.0.4](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/commits/1.0.4) - 2024-11-06

### Main features

* Update and optimize (SVG) payment methods logos
* Update Oney banner behavior on PDP to avoid template override

**[View diff](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/compare/1.0.3...1.0.4)**

### Added
- Optimisze CB and payment cards SVG files [#58](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/58)

### Changed
- Move Oney banner to additionnal container to avoid product info template override [#56](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/56) / Issue [#1](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/issues/1)
- Upate CB logo [#58](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/58)
- Upate Mastercard logo [#60](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/60)

### Fixed
- Fix residual container when Oney payment method is disabled [#56](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/56)
- Optimisze CB and payment cards SVG files [#58](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/58)

### Removed
- Remove product info template override [#56](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/56) / Issue [#1](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/issues/1)

## [1.0.3](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/commits/1.0.3) - 2024-09-23

### Main features

* Oney banner support on product and cart view
* Payplug script loading optimization
* Optimize controllers security
* Add security with form key to the Apple Pay controller
* Fix Payplug secured domain url
* Update and optimize payment cards logos
* Tailwindification various
* Clean various

**[View diff](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/compare/1.0.2...1.0.3)**

### Added

- Add get product id method for the simulation component [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Add italian support for Oney payment popin [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Add Oney banner on cart and adjust Tailwind styles [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Add Oney popin position settings via layout [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Add Oney simulation button [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Add Oney simulation popin [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Add security with form key to the Apple Pay controller [#45](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/45)
- Add the backend for the oey simulation on Hyva [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Add the tracking of the Hyva version whenever a payment is made [#46](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/46)

### Changed

- Change composer getter scope to private [#46](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/46)
- Change the hyva post request [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Move Oney simulation block to product info section [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Move the caching of the hyva version to the recurring data patch [#46](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/46)
- Optimize Oney button label set condition [#39](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/39)
- Optimize place order button label update on Oney payment change [#39](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/39)
- Scope the plugin to frontend, and cache the module version in the database [#46](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/46)
- Update cb Logo [#47](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/47)
- Update Magewire templates naming and location conventions [#48](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/38)
- Update and optimize payment cards logos [#47](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/47)
- Update payplug main script loading behavior [#38](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/38)
- Use orderinterfaces instead of the model [#45](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/45)

### Fixed

- Fix Payplug secured domain url [#50](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/50)
- Fix place order button text on payment method select [#39](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/39)
- Fix redeclaration of const error [#49](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/49)
- Fix standard payment credit card selector [#47](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/47)
- Update standard payment indentation [#47](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/47)

### Removed

- Clean useless id and xmlns [#47](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/47)
- Remove residual useless script file [#38](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/38)
- Remove useless svg file [#47](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/47)

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