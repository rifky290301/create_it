import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) { }


import Vue from 'vue';
import VueSweetalert2 from 'vue-sweetalert2';
// import Toasted from 'vue-toasted';
import AOS from "aos";
import "aos/dist/aos.css";

// vue.use(Toasted)
Vue.use(VueSweetalert2);
// Vue.use(VueRouter);
Vue.use(AOS);

import router from './router';

Vue.component('navigation', require('./components/Navigation.vue').default);

// Vue.productionTips = false

const app = new Vue({
    created() {
        AOS.init()
    },
    el: '#create_it',
    // router: new VueRouter(routes)
    router
});

