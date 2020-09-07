
require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;

// support router
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import {routes} from './routes';
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const router = new VueRouter({
    routes, // short for `routes: routes`
    mode:'history',
})

// support vuex

import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"
const store = new Vuex.Store(
    storeData
)


const app = new Vue({
    el: '#app',
    router,
    store
});
