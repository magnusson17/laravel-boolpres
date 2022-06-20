import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import HomePage from './components/pages/HomePage.vue';
import ContactList from './components/pages/ContactList.vue';
import NotFoundPage from './components/pages/NotFoundPage.vue';
import PostDeteilPage from './components/pages/PostDeteilPage.vue';

// inizializzare router

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        // IO gli sto dicendo: nel path '/' portami ad homePage
        { path: '/', component: HomePage, name: 'home' },
        { path: '/contacts', component: ContactList, name: 'contacts' },
        { path: '/posts/:id', component: PostDeteilPage, name: 'post-deteil' },
        { path: '*', component: NotFoundPage, name: 'notFound' }
    ]
});