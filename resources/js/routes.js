import Vue from "vue";
import Router from "vue-router";
import Login from "./pages/LoginComponent.vue";


Vue.use(Router);

const routes= [

    {
        path:"/",
        name:"login",
        component: Login

    },

    {
        path: "/admin",
        name: "admin",
        component: ()=>import("./pages/AdminComponent.vue")
    },
     {
         path: "/cursos",
         name:"cursos",
         component: ()=>import("./pages/CursoComponent.vue")
     },
     {
        path: "/asig",
        name:"asig",
        component: ()=>import("./pages/AsigComponent.vue")
    }
];

const router= new Router({
    routes:routes,
    linkActiveClass: 'active'
});

export default router;
