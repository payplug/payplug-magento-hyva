(() => {
  window.addEventListener('checkout:step:loaded', event => {
    if (typeof window.ApplePaySession != "undefined" && window.ApplePaySession && ApplePaySession.canMakePayments()){
    }else{
      document.querySelector('#payment-method-option-payplug_payments_apple_pay').remove();
    }
  });
})()



