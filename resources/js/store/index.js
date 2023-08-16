import Vue from "vue";
import Vuex from "vuex";

// modules

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        user: [],
    },
    getters: {
        userGet(state) {
            return state.user;
        },
    },
    mutations: {
        userMut(state, token) {
            state.user = [];
            if (token !== "logout") {
                state.user.push(token);
            }
        },
    },
    actions: {
        userAct(context, token) {
            context.commit("userMut", token);
        },
    },
    modules: {},
});

export default store;
