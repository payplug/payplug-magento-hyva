
window.loadPayplug = function () {
    if (typeof Payplug !== 'undefined') {
        return;
    }


    if (document.querySelector('#payplug-js')) {
        return;
    }

    const script = document.createElement('script');
    script.src = 'https://cdn-qa.payplug.com/js/integrated-payment/v1@1/index.js';
    script.setAttribute('id', 'payplug-js');

    document.head.append(script);
};

window.loadPayplug();
