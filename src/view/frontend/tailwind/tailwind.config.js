/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2020-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

module.exports = {
  theme: {
    extend: {
      width: {
        'payment-card': '33px',
      },
      height: {
        'payment-card': '22px',
      }
    }
  },
  content: [
      '../templates/**/*.phtml',
  ]
}
