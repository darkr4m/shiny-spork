import Vue from 'vue';
import vuetify from '@/js/plugins/vuetify'

// import {store} from '@/js/store';
import {router} from '@/js/router';
import App from '@/js/views/App';

const app = new Vue({
    vuetify,
    router,
    // store,
    render: h => h(App),
}).$mount("#app")