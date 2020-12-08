import Vue from "vue";
import Router from "vue-router";
import Login from "./pages/LoginComponent.vue";


Vue.use(Router);

const routes= [

    {
        path:"/",
        name:"login",
        component: () => import("./pages/AdminComponent.vue")
    },
    {
        path: "/admin",
        name: "admin",
        component: ()=>import("./pages/AdminComponent.vue")
    }
];

const router= new Router({
    routes:routes
});

export default router;
