
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import {BootstrapVue, BootstrapVueIcons} from 'bootstrap-vue'
require('./bootstrap');

window.Vue = require('vue');
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)
import home from './components/Home.vue';
import headerz from './components/Header.vue';
import footerz from './components/Footer.vue';
import finalcut from './components/FinalCutPro.vue';
import garageband from './components/Garageband.vue';
import imove from './components/LogicPro.vue';
import logicpro from './components/LogicPro.vue';

Vue.component('home', require('./components/Home.vue').default)
Vue.component('headerz', require('./components/Header.vue').default)
Vue.component('footerz', require('./components/Footer.vue').default)
Vue.component('finalcut', require('./components/FinalCutPro.vue').default)
Vue.component('garageband', require('./components/Garageband.vue').default)
Vue.component('imove', require('./components/Imove.vue').default)
Vue.component('logicpro', require('./components/LogicPro.vue').default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    components: { home,headerz,footerz, finalcut, garageband, imove, logicpro }
});
