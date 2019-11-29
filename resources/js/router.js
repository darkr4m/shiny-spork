import Vue from 'vue';
import VueRouter from 'vue-router';

import Dashboard from '@/js/components/Dashboard';

Vue.use(VueRouter);

export const router = new VueRouter({
    mode: 'history',
    routes:
    [
        {
            path: '/',
            name: 'Dashboard',
            component: Dashboard
        }
    ]
})