import VueRouter from "vue-router";
import store from "./store";



const routes = [

    
];


const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

router.beforeEach((to, from, next) => {
    if (store.state.user.length == 0 && to.path !== "/login")
        next({ path: "/login" });
    else next();
});

export default router;