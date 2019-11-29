<template>
    <v-app-bar app
    clipped-left>
        <v-toolbar-title>Guild Admin Panel</v-toolbar-title>
    </v-app-bar>
</template>

<script>
export default {
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
    }),
    created () {
      this.$vuetify.theme.dark = true
    } 
}
</script>