<template>
    <span>
        <v-app-bar app flat>
            <v-icon
                class="mr-1"
                icon
                @click="
                    mini = !mini;
                    permanent = !permanent;
                "
            >
                {{
                    `${
                        mini
                            ? "mdi-format-align-center"
                            : "mdi-format-align-left"
                    }`
                }}
            </v-icon>

            <v-spacer></v-spacer>

            <!-- notiffications icon -->
            <v-btn
                depressed
                icon
                @click="notificationNav = !notificationNav"
                color="secondary"
                class="mx-1"
            >
                <v-icon class="mx-2">mdi-bell</v-icon>
                <!-- <v-icon class="mx-2" color="red">mdi-bell-alert</v-icon> -->
            </v-btn>

            <!-- account icon -->
            <v-menu offset-y min-width="200">
                <template v-slot:activator="{ on, attrs }">
                    <v-btn
                        depressed
                        icon
                        @click="avatarMenu()"
                        color="secondary"
                        v-bind="attrs"
                        v-on="on"
                    >
                        <v-icon>mdi-dots-vertical</v-icon>
                    </v-btn>
                </template>

                <v-list>
                    <v-list-item>
                        <v-icon left color="secondary"
                            >mdi-account-outline</v-icon
                        >
                        <v-list-item-title>Account Info</v-list-item-title>
                    </v-list-item>
                    <v-list-item>
                        <v-icon left color="secondary"
                            >mdi-account-switch-outline</v-icon
                        >
                        <v-list-item-title>Switch Users</v-list-item-title>
                    </v-list-item>
                    <v-list-item @click="logOut()">
                        <v-icon left color="secondary"
                            >mdi-account-arrow-right</v-icon
                        >
                        <v-list-item-title>Log Out</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>

            <!-- <v-btn depressed fab small @click="avatarMenu()" color="accent">
				<v-icon>mdi-account</v-icon>
			</v-btn> -->
        </v-app-bar>

        <!-- main navigation drawer -->
        <v-navigation-drawer
            :mini-variant="mini"
            :permanent="permanent"
            :width="navWidth"
            v-model="drawer"
            app
        >
            <v-list :dense="denseNav" nav>
                <v-list-item v-if="!mini" class="px-2">
                    <v-img :src="require('./gf.png')"></v-img>
                </v-list-item>
                <!-- dashboard -->
                <span>
                    <!-- <span> -->
                    <v-list-item class="text-caption" to="/">
                        <v-list-item-icon>
                            <v-icon>mdi-monitor-dashboard</v-icon>
                        </v-list-item-icon>

                        <v-list-item-title>Dashboard</v-list-item-title>
                    </v-list-item>
                </span>
            </v-list>
        </v-navigation-drawer>

        <!-- right navigation bar -->
        <v-navigation-drawer
            :mini-variant="mini"
            :permanent="permanent"
            :width="50"
            v-model="drawer"
            right
            app
        >
            <v-list :dense="denseNav" nav>
                <!-- log out -->
                <span>
                    <v-list-item class="text-caption" to="">
                        <v-list-item-icon>
                            <v-icon>mdi-logout</v-icon>
                        </v-list-item-icon>
                    </v-list-item>
                </span>
                <!-- charts -->
                <span>
                    <v-list-item class="text-caption" to="">
                        <v-list-item-icon>
                            <v-icon>mdi-chart-arc</v-icon>
                        </v-list-item-icon>
                    </v-list-item>
                </span>
            </v-list>
        </v-navigation-drawer>
    </span>
</template>

<script>
export default {
    data() {
        return {
            notificationNav: false,
            accountAvatarMenu: false,
            drawer: null,

            denseNav: true,
            navWidth: 250,
            color: false,
            themeColor: "",
            mini: false,
            permanent: false,
        };
    },
    methods: {
        changeThemeColor() {
            this.$vuetify.theme.themes.light.secondary = this.themeColor.slice(
                0,
                7
            );
            this.$vuetify.theme.themes.dark.secondary = this.themeColor.slice(
                0,
                7
            );
            this.color = false;
        },
        toggleDarkMode() {
            this.$vuetify.theme.dark = !this.$vuetify.theme.dark;
        },
        avatarMenu() {
            // accountAvatarMenu=!accountAvatarMenu
            this.accountAvatarMenu = !this.accountAvatarMenu;
        },
        logOut() {
            this.$store.dispatch("userAct", "logout");
            // location.reload();
        },
    },
};
</script>
