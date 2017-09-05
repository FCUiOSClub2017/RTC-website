window._ = require('lodash');
try {
    window.$ = window.jQuery = require('./guardian/jquery.min.js');
    window.Popper = require('../../../node_modules/popper.js/dist/umd/popper.js');
    require('bootstrap');
    require('jquery.easing');
    require('../../../node_modules/jquery.stellar/jquery.stellar.js');
    require('./guardian/jquery.waypoints.min.js');
    require('./guardian/hoverIntent.js');
    require('./guardian/superfish.js');
    require('./guardian/main.js');
    // Collapse the navbar when page is scrolled
    $(window).scroll(function() {
        if ($("#fh5co-header-section").offset().top > 100) {
            $("#fh5co-header-section").addClass("navbar-shrink");
        } else {
            $("#fh5co-header-section").removeClass("navbar-shrink");
        }
    });
    //*/
} catch (e) {}
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token)
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
else
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
window.Vue = require('vue');
Vue.component('example', require('./components/Example.vue'));
const app = new Vue({
    el: '#app'
});