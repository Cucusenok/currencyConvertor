<template>
    <v-app id="inspire" dark>
        <v-navigation-drawer
                fixed
                v-model="drawer"
                right
                app
        >
            <v-list dense>
                <v-list-tile @click="">
                    <v-list-tile-action>
                        <v-icon>home</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Home</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>

            </v-list>
        </v-navigation-drawer>
        <v-toolbar color="yellow accent-4" dark fixed app>
            <v-spacer></v-spacer>
            <v-toolbar-title>Application</v-toolbar-title>
            <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        </v-toolbar>
        <v-content>
            <router-view></router-view>

        </v-content>
        <v-footer color="yellow accent-4" app>
            <v-spacer></v-spacer>
            <span class="white--text">&copy; 2019</span>
        </v-footer>
    </v-app>
</template>

<script>
    export default {
        name: "App",

        data: () => ({
            drawer: null
        }),

        props: {
            source: String
        },

        mounted() {
        }

    }
</script>

<style scoped>

</style>