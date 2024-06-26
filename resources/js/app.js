/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import myMixins from './helper/mixin';
Vue.mixin(myMixins);

// Router
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//outside-click
import vClickOutside from 'v-click-outside';
Vue.use(vClickOutside)

//Axios
import apiService from './axios';
window.APISERVICE = apiService;

//Cookie
import VueCookies from 'vue-cookies';
Vue.use(VueCookies);

//Toast message
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
Vue.use(Toast, {
    position: "top-right",
    timeout: 2952,
    closeOnClick: true,
    pauseOnFocusLoss: true,
    pauseOnHover: true,
    draggable: true,
    draggablePercent: 0.6,
    showCloseButtonOnHover: false,
    hideProgressBar: true,
    closeButton: "button",
    icon: true,
    rtl: false
});

//Chart
import Chart from 'chart.js/auto';
window.chart = Chart;

//helper object
import commonFunction from './helper/commonFunction';
window.commonFunction = commonFunction;

// select box
import Multiselect from 'vue-multiselect';
Vue.component('multiselect', Multiselect)

// select box
import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect)


import routes from './router.js';

const router = new VueRouter({
  routes,
  mode: 'history',
  base:'admin',
  linkActiveClass: 'active',
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
