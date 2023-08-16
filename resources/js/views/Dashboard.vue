<template>
    <div>
        <v-btn rounded class="ma-3 px-5" depressed color="success" @click="upload_to_local_storage">
            Upload to local storage
        </v-btn>
        <div></div>
        {{ user2.length }}
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: [
                {
                    name: "John Makone",
                    id: 14,
                    token: "hfhsgsf55fs1fs2r55s",
                },
            ],
            user2: {},
        };
    },
    methods: {
        upload_to_local_storage() { },
    },
    mounted() {
        // if (localStorage.user) {
        //     // console.log(localStorage.user.length);
        //     this.user2 = JSON.parse(localStorage.user);
        // } else {
        //     localStorage.user = JSON.stringify(this.user);
        // }
    },
};
</script>
