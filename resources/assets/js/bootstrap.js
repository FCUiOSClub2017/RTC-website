window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

if (window.jQuery) {
    window.Popper = require('../../../node_modules/popper.js/dist/umd/popper.js');
    require('bootstrap');
    require('../../../node_modules/jquery.easing/jquery.easing.1.3.js');
    require('./jqBootstrapValidation.js');
    // require('../../../node_modules/jquery.stellar/jquery.stellar.js');
    // window.Stellar = require('./guardian/jquery.stellar.min');
    require('./guardian/jquery.waypoints.min.js');
    require('./guardian/hoverIntent.js');
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            if ($('body').hasClass('fh5co-offcanvas')) {
                $('body').removeClass('fh5co-offcanvas');
            }
            $('html, body').animate({
                scrollTop: (target.offset().top - 60)
            }, 1000, "easeInOutExpo");
            return false;
        }
    });


    $('a.js-scroll-trigger-active[href*="#"]:not([href="#"])').click(function() {
        $('a.js-scroll-trigger-active[href*="#"]:not([href="#"])').parent().removeClass('active')
        $(this).parent().addClass('active')
        console.log($(this).parent())
    });
}


/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });