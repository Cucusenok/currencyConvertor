

window.Vue = require('vue');

import VueRouter from 'vue-router'
import App from './components/App'
import router from './routes'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'




window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(Vuetify);





const app = new Vue({
    el: '#app',
    components: { App },
    router,
});



