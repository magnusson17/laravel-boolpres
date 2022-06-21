window.Vue = require('vue');
// richiedo axios. Cosi facendo (richiedendolo qua in front.js) per tutti i componenti interni di vue sarà presente axios
// però cè un problema, quindi importa axios dentro ogni componente
//axios = require('axios');

import Vue from 'vue';
//importo il router
import router from './routes.js';
import App from './components/App.vue';

const root = new Vue({
    el: '#root',
    // porto router come info (sarebbe router: router, ma ok anche solo router,)
    router,
    render: h => h(App)
});

// TUTTO CIO VIENE POI INSERITO DENTRO WELCOME.BLADE.PHP

