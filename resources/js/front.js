window.Vue = require('vue');

import Vue from 'vue';
import router from './routes.js';
import App from './components/App.vue';

const root = new Vue({
    el: '#root',
    router,
    render: h => h(App)
});
