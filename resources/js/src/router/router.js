import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("../Pages/HomeRoute.vue"),
    },
    {
        path: "/test",
        component: () => import("../Pages/TestRoutes.vue"),
    },
    {
        path: "/pengecekan/create",
        component: () => import("../Pages/PengecekanForm.vue"),
    },
    {
        path: "/create",
        component: () => import("../Pages/Create.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
