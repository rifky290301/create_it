import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) { }


import Vue from 'vue';
import VueRouter from 'vue-router';
import VueSweetalert2 from 'vue-sweetalert2';
// import Toasted from 'vue-toasted';

// vue.use(Toasted)
Vue.use(VueSweetalert2);
Vue.use(VueRouter);

import routes from './router';

Vue.component('navigation', require('./components/Navigation.vue').default);

// Vue.productionTips = false

const app = new Vue({
    el: '#create_it',
    router: new VueRouter(routes)
});
