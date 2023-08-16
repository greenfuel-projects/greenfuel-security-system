import VueRouter from "vue-router";
import store from "./store";

import Dashboard from "./views/Dashboard.vue";

const routes = [
    
    {
        path: "/home",
        name: "Dashboard",
        component: Dashboard,
    },
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

router.beforeEach((to, from, next) => {

    let user = localStorage.user;

    console.log(user);

    if (user == undefined && to.path !== "/login") {
        next({ path: "/login" });
    }
    else next();

    // if (user == undefined) {
    //     next({ path: "/login" });
    // } else next();

    // if (user[0].length == 0 && to.path !== "/login")
    //     next({ path: "/login" });
    // else next();
});

export default router;
