<template>
    <v-app class="grey lighten-5">
        <navigation-drawer></navigation-drawer>
        <v-content>
            <v-container fluid class="pa-0">
                <router-view></router-view>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
import NavigationDrawer from "@/js/components/NavigationDrawer";

export default {
    components: {
        NavigationDrawer,
    }
}
</script>