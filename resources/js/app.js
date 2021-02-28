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
import AOS from "aos";
import "aos/dist/aos.css";

Vue.use(VueSweetalert2);
Vue.use(AOS);

import router from './router';

Vue.component('navigation', require('./components/Navigation.vue').default);

const app = new Vue({
    created() {
        AOS.init()
    },
    el: '#create_it',
    // router: new VueRouter(routes)
    router
});

