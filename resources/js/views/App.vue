<template>
    <v-app>
        <Navbar v-if="userGet.length > 0" />
        <v-main v-if="userGet.length > 0" class="mx-2 d-prilnt-none">
            {{userGet}}
            <router-view />
        </v-main>
        <login v-if="userGet.length == 0" />
    </v-app>
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Login from "./Login.vue";
import { mapGetters } from 'vuex'

export default {
    name: "App",

    data: () => ({
        user: [],
    }),
    computed: {
        
        ...mapGetters(["userGet"]),
    },
    components: {
        Navbar,
        Login,
    },
    mounted() {
        if (localStorage.user) {

            this.user = JSON.parse(localStorage.user);

            this.$store.dispatch("userAct", {
                token: this.user[0].token,
            });
        }
    },
};
</script>

<style>
.page-header {
    font-size: 20px;
    color: grey;
}

.comic-sans-ms {
    font-family: "Comic Sans MS";
}

.roboto {
    font-family: "Century Gothic";
}

.selected-row {
    background-color: #3a666c;
    color: #ffffff;
}

.navigation-items {
    text-decoration: none;
}
</style>
