import { createRouter, createWebHistory } from 'vue-router';
import Home from './components/Home.vue';
import About from './components/About.vue';
import NotFound from "./components/NotFound.vue"
const routes = [
    {
        path: '/',
        component: Home,
    },
    {
        path: '/about',
        component: About,
    },
    {
        path: '/:catchAll(.*)',
        component: NotFound
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
