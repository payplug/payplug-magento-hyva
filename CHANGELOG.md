# Changelog - Hyvä compatibility module for Payplug payments

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.1.0](https://github.com/payplug/payplug-magento-hyva/releases/tag/2.1.0) - 2025-XX-XX

### Main features

- Add Payplug module 4.6.0 support
- Add Apple Pay button support to cart and product pages

### Added
- Add Apple button support to cart page [#5](https://github.com/payplug/payplug-magento-hyva/pull/5/)
- Add Apple button support to product page [#5](https://github.com/payplug/payplug-magento-hyva/pull/5/)

### Changed
- Update Apple Pay button render on product view page [#5](https://github.com/payplug/payplug-magento-hyva/pull/5/)

## [2.0.3](https://github.com/payplug/payplug-magento-hyva/releases/tag/2.0.3) - 2025-XX-XX

### Main features

- Add Hyvä Checkout 1.3.5 support
- Update licence module to by OSL-3.0
- Fix blocked validation on other payment method
- Fix place order button states on switch between payment methods

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/2.0.2...2.0.3)**

### Changed
- Clear messages notifications on payment method selection [#8](https://github.com/payplug/payplug-magento-hyva/pull/8)
- Update Hyva Checkout version to support the 1.3.5 version [#14](https://github.com/payplug/payplug-magento-hyva/pull/14)
- Update presentation and installation process in README.md file [#9](https://github.com/payplug/payplug-magento-hyva/pull/9)
- Replace Hyva licence by OSL-3.0 [#13](https://github.com/payplug/payplug-magento-hyva/pull/13)

### Fixed
- Fix blocked validation after select standard or oney payment method [#8](https://github.com/payplug/payplug-magento-hyva/pull/8)
- Fix place order button states on Apple Pay and Oney updates [#8](https://github.com/payplug/payplug-magento-hyva/pull/8)

### Fixed
- Fix composer licence wrong declaration [#13](https://github.com/payplug/payplug-magento-hyva/pull/13)
- Remove additional method items vertical spacing [#8](https://github.com/payplug/payplug-magento-hyva/pull/8)
- Remove useless code legacy [#8](https://github.com/payplug/payplug-magento-hyva/pull/8)

## [2.0.2](https://github.com/payplug/payplug-magento-hyva/releases/tag/2.0.2) - 2025-09-30

> [!NOTE]
>
> The [gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/) repository is no longer maintained and is replaced by its new official location: [github.com/payplug/payplug-magento-hyva](https://github.com/payplug/payplug-magento-hyva).

### Main features

- Move repository from Gitlab to Github
- Upgrade Apple Pay JS SDK version to support other browsers

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/2.0.1...2.0.2)**

### Added
- Add new repository infomations [#1](https://github.com/payplug/payplug-magento-hyva/pull/1)

### Changed
- Update Payplug module version dependency [#2](https://github.com/payplug/payplug-magento-hyva/pull/2)
- Upgrade Apple Pay JS SDK version to support other browsers [#1](https://github.com/payplug/payplug-magento-hyva/pull/1)

## [2.0.1](https://github.com/payplug/payplug-magento-hyva/releases/tag/2.0.1) - 2025-09-24

### Main features

- Fix Apple Pay payment method

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/2.0.0...2.0.1)**

### Added
- Add missing use strict [#99](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/99)
- Add place order enability behavior on Apple Pay selection [#99](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/99)

### Changed
- Update Apple Pay button render [#99](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/99)

### Fixed
- Fix Apple Pay button display and behavior [#99](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/99)

## [2.0.0](https://github.com/payplug/payplug-magento-hyva/releases/tag/2.0.0) - 2025-09-08

> [!NOTE]
>
> This version has **major backward-incompatible changes** due to the introduction of **CSP support** in Hyvä Checkout >=1.3.0. You must consider adjusting your previous template overrides and your Alpine.js custom developments when upgrading.
> 
> Please check the [official Hyvä Documentation](https://docs.hyva.io/hyva-themes/writing-code/csp/index.html) and [Changelog](https://docs.hyva.io/checkout/hyva-checkout/upgrading/upgrading-to-1.3.0.html) for more informations.

### Main features

- CSP support
- Standard and PPRO payments fixes
- Fix PPRO payment method messages on selection
- Oney payment method sanitization and optimizations

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.1.1...2.0.1)**

### Added
- Add CSP support on payment methods [#83](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/83)
- Add Oney options support on checkout [#83](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/83)
- Add Oney error message [#95](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/95)
- Add loader on standard payment validation [#95](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/95)

### Changed
- Code optimizations and refactoring on standard and Oney payment methods [#83](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/83)
- Sanitize Payplug and Apple Pay SDK scripts load [#87](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/87)

### Fixed
- Fix standard and Oney payment method initialization when preselected [#83](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/83)
- Fix sandbox variable namming [#83](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/83) 
- Fix save card render on standard payment method [#83](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/83)
- Fix integrated payment form validation console error on submit [#92](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/92) [#95](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/95)
- Fix payment method code update on PPRO payment method selection [#95](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/95)

### Removed
- Remove useless OneStepCheckout CSS rules [#83](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/83)

## [1.1.1](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.1.1) - 2025-03-19

### Main features

- Fix ApplePay init on button action [#80](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/80) [#81](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/81)
- Fix "SvgIcons iconPathPrefix argument should not be changed" issue [#4](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/issues/4)
- Fix payment card logo and alt for italian locales
- Rename Payplug icons folder
- Remove Giropay and Sofort unsupported payment methods

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.1.0...1.1.1)**

### Added
- Add checkout Payplug payment methods custom margins [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77)
- Add `Payplug_Payments` logos payment methods icons usage and remove duplicated logos [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77)

### Changed
- Normalize standard payment render [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77)
- Rename Payplug icons folder [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77)
- Sanitize various from Apple Pay template [#80](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/80)
- Update payment methods logo paths [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77) / Issue [#4](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/issues/4)

### Fixed
- Fix ApplePay init on button action [#80](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/80) [#81](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/81)
- Fix payment card logo and alt for italian locales [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77)
- Fix Postepay dark logo [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77)

### Removed
- Remove iconPathPrexif configuration override [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77) / Issue [#4](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/issues/4)
- Remove Giropay and Sofort unsupported payment methods [#77](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/77)

## [1.1.0](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.1.0) - 2025-02-03

### Main features

* Add standard payment method pop-up option

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.0.6...1.1.0)**

### Added
- Add standard payment method pop-up option [#69](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/69)
- Add Payplug script URL to CSP whitelist [#75](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/75)

### Fixed
- Fix PostePay dark version image [#69](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/66)

## [1.0.6](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.0.6) - 2024-12-12

### Fixes
- Hotfix Oney payment place order [#73](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/73)
- Hotfix standard payment place order [#71](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/71)
- Fix Payplug integrated lib URL [#71](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/71)

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.0.5...1.0.6)**

## [1.0.5](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.0.5) - 2024-11-13

### Fixes
- Hotfix missing payplug domain JS variable [#63](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-payplug/-/merge_requests/63)

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.0.4...1.0.5)**

## [1.0.4](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.0.4) - 2024-11-06

### Main features

* Update and optimize (SVG) payment methods logos
* Update Oney banner behavior on PDP to avoid template override

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.0.3...1.0.4)**

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

## [1.0.3](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.0.3) - 2024-09-23

### Main features

* Oney banner support on product and cart view
* Payplug script loading optimization
* Optimize controllers security
* Add security with form key to the Apple Pay controller
* Fix Payplug secured domain url
* Update and optimize payment cards logos
* Tailwindification various
* Clean various

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.0.2...1.0.3)**

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

## [1.0.2](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.0.2) - 2024-07-19

### Features

* Bug fixes
* Oney payment optimizations, improvements
* Security improvements

**[View diff](https://github.com/payplug/payplug-magento-hyva/compare/1.0.1...1.0.2)**

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

## [1.0.1](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.0.1) - 2024-06-20

### Features

* Update readme

## [1.0.0](https://github.com/payplug/payplug-magento-hyva/releases/tag/1.0.0) - 2024-05-14

### Features

* Standard payment support
* Oney payment support
* PPRO payment support
* Apple Pay payment support
