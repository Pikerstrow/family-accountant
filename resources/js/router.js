/*Router*/
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);


import Registration from './components/auth/Registration.vue';
import Login from './components/auth/Login.vue';

const routes = [
    {path: '/login', component: Login},
    {path: '/registration', component: Registration},
];

export const router = new VueRouter({
    routes: routes,
    mode: 'history'
});



