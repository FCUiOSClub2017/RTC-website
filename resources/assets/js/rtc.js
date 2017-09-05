try {
    window.$ = window.jQuery = require('jquery');
    window.RTC = require('./rtc/freelancer');
} catch (e) {
    console.log(e);
}