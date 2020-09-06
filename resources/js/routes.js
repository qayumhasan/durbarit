import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


export const routes = [
    {
        path: '/message',
        component: require('./components/ExampleComponent').default
    },
  ]

