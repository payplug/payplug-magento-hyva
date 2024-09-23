module.exports = {
  theme: {
    extend: {
      colors: {
        oney: {
          'DEFAULT': '#81BC00',
          lighter: '#ECF5D9'
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
