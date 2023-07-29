import Vue from "vue";
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import "@mdi/font/css/materialdesignicons.css";
import axios from "axios";
import router from "./routes";
import VueRouter from "vue-router";
import store from "./store";

Vue.use(Vuetify);
Vue.use(VueRouter);

Vue.prototype.$http = axios;

Vue.component("app-component", require("./views/App.vue").default);

const app = new Vue({
    vuetify: new Vuetify(),
    store: store,
    router,
}).$mount("#app");
