(() => {
  window.addEventListener('checkout:step:loaded', event => {
    if (typeof window.ApplePaySession != "undefined" && window.ApplePaySession && ApplePaySession.canMakePayments()){
    }else{

      if (typeof(document.querySelector('#payment-method-option-payplug_payments_apple_pay')) != 'undefined' && document.querySelector('#payment-method-option-payplug_payments_apple_pay') != null){
        document.querySelector('#payment-method-option-payplug_payments_apple_pay').remove();
      }

    }
  });

  window.addEventListener('checkout:payment:method-activate', (event) => {
    if (typeof window.ApplePaySession != "undefined" && window.ApplePaySession && ApplePaySession.canMakePayments()){
    }else{

      if (typeof(document.querySelector('#payment-method-option-payplug_payments_apple_pay')) != 'undefined' && document.querySelector('#payment-method-option-payplug_payments_apple_pay') != null){
        document.querySelector('#payment-method-option-payplug_payments_apple_pay').remove();
      }

    }
  });
})()



