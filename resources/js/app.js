import Vue from 'vue'
import VueRouter from 'vue-router'
import VueSimpleAlert from "vue-simple-alert";

Vue.use(VueRouter);
Vue.use(VueSimpleAlert);

require('./bootstrap');

// window.Vue = require('vue');
// Vue.use(VueRouter);
// import VueRouter from 'vue-router';
//import router from './routes.js';

// Vue.config.productionTip = false;

import VueApp from './components/VueApp';
import Card from './components/Card';
import Products from './components/Products';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'products',
            component: Products
        },
        {
            path: '/card',
            name: 'card',
            component: Card,
        },
    ],
});

// Vue.component('vue-app', require('./components/Vue-app.vue').default);


const app = new Vue({
    el: '#app',
    components: { VueApp },
    router,
});
