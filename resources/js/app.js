require('./bootstrap');
import vue from 'vue'
window.Vue = vue;

Vue.config.devtools = true;

import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

//Importamos y configuramos el Vue-router
import VueRouter from 'vue-router';
import {routes} from './routes';
 
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
 
//base: './control/public',
const router = new VueRouter({
    mode: 'abstract',  
    routes: routes
});
 
//finalmente, definimos nuestra app de Vue
const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});