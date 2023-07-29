<template>
    <v-app>
        <Navbar/>
        <v-main
            class="mx-2 d-prilnt-none"
        >
            <router-view />
        </v-main>
      
    </v-app>
</template>

<script>
import Navbar from "../components/Navbar.vue";

export default {
    name: "App",

    data: () => ({
        //
    }),
    components: {
        Navbar,
    },
};
</script>

<style>
.page-header {
	font-size: 20px;
    color: grey;
}

.comic-sans-ms {
	font-family: 'Comic Sans MS';
}

.roboto {
	font-family: "Century Gothic";
}

.selected-row {
    background-color: #3a666c;
    color: #ffffff;
}

.navigation-items{
	text-decoration: none;
}

</style>
