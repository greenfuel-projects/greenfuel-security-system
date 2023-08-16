<template>
    <div>
        <v-container>
            <v-row>
                <v-col
                    cols="12"
                    sm="8"
                    offset-sm="2"
                    md="6"
                    offset-md="3"
                    offset-lg="4"
                    lg="4"
                >
                    <v-card class="mt-md-10 pa-3" elevation="5">
                        <v-img :src="require('../components/gf.png')"></v-img>
                        <!-- if not authenticated display login form -->
                        <v-card-text v-if="!authenticated">
                            <span class="font-weight-bold">Username</span>
                            <v-text-field
                                v-model="user.username"
                                type="text"
                                color="green"
                                prepend-inner-icon="mdi-account"
                                class="mt-2"
                                dense
                                outlined
                            >
                            </v-text-field>
                            <span class="font-weight-bold">Password</span>
                            <v-text-field
                                v-model="user.password"
                                type="password"
                                color="green"
                                prepend-inner-icon="mdi-lock"
                                class="mt-2"
                                dense
                                outlined
                            >
                            </v-text-field>
                        </v-card-text>
                        <!-- if authenticated display site selection -->
                        <v-card-text v-else>
                            <span class="font-weight-bold">Operating Site</span>
                            <v-select
                                v-model="user.username"
                                :items="['Mill', 'Workshop', 'Training Center']"
                                type="text"
                                color="green"
                                prepend-inner-icon="mdi-map-marker"
                                class="mt-2"
                                dense
                                outlined
                            >
                            </v-select>
                            <!-- <v-select class="pt-4" outlined prepend-inner-icon="mdi-map-marker" @change="selectedSiteMeth" v-model="selectedSite" :loading="loading" :items="siteItems" dense label="Login Site"></v-select> -->
                        </v-card-text>

                        <v-btn
                            @click="authenticated ? login() : search_user()"
                            :loading="loading"
                            block
                            depressed
                            color="green white--text"
                        >
                            {{ `${!authenticated ? "LOGIN" : "PROCEED"}` }}
                        </v-btn>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: {
                username: "",
                password: "",
            },
            profile: {
                id: null,
                fullname: "",
                token: "hhdsgsudjsdjdsjhdsterw426",
            },
            loading: false,
            authenticated: false,
        };
    },
    computed: {},
    methods: {
        search_user() {
            // confirn user from the server
            this.authenticated = true;
            console.log('searching...')
        },

        login() {
            // login the user to proceed to system
            localStorage.user = JSON.stringify([this.profile]);

            this.$store.dispatch("userAct", {
                token: this.profile.token,
            });
        },
    },
};
</script>
