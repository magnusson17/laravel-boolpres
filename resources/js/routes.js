// sulla documentazione di laravel trovi queste righe di codice
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
//

//import dei components (dentro il folder pages)
import HomePage from './components/pages/HomePage.vue';
import ContactList from './components/pages/ContactList.vue';
import NotFoundPage from './components/pages/NotFoundPage.vue';
import PostDeteilPage from './components/pages/PostDeteilPage.vue';

// inizializzare la const router
const router = new VueRouter({
    // permette a VueRouter di passare dinamicamente da una pag ad un'altra cliccando sui tasti (avanti/indietro) del broswere. Tenendo in memoria qual era la pag prima e qual era la pag dopo.
    mode: 'history',
    // inserisce la parola 'active' in una delle classi dinamiche di <router-link
    linkExactActiveClass: 'active',
    // 
    routes: [
        // IO gli sto dicendo: nel path '/' portami ad HomePage
        { path: '/', component: HomePage, name: 'home' },
        { path: '/contacts', component: ContactList, name: 'contacts' },
        // in laravel invece avrei usato {id}
        { path: '/posts/:id', component: PostDeteilPage, name: 'post-deteil' },
        { path: '*', component: NotFoundPage, name: 'notFound' }
    ]
});

// per permettere a front.js di importare router
export default router;