<template>
    <v-app class="grey lighten-5">
        <navigation-drawer></navigation-drawer>
        <application-bar></application-bar>
        <v-content>
            <v-container fluid class="pa-0">
                <router-view></router-view>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
import NavigationDrawer from "@/js/components/navigation/NavigationDrawer";
import ApplicationBar from "@/js/components/navigation/ApplicationBar";

export default {
    components: {
        NavigationDrawer,
        ApplicationBar
    }
}
</script>