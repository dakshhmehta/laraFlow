// require('./bootstrap');

import { InertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'

Vue.use(InertiaApp)

const app = document.getElementById('app')

Vue.component('Layout', require('./Parts/Layout').default)

new Vue({
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => require(`./Views/${name}`).default,
    },
  }),
}).$mount(app)