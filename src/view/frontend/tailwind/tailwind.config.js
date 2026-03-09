const oneyColor = '#81BC00';

module.exports = {
  theme: {
    extend: {
      colors: {
        oney: {
          'DEFAULT': oneyColor,
          lighter: '#ECF5D9'
        }
      },
      borderColor: {
        oney: {
          'DEFAULT': oneyColor,
          lighter: '#DCE0E8'
        }
      },
      width: {
        'payment-card': '33px',
      },
      height: {
        'payment-card': '22px',
      }
    }
  },
  content: [
      '../layout/**/*.xml',
      '../templates/**/*.phtml'
  ]
}
