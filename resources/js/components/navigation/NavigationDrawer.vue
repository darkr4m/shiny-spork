<template>
    <v-navigation-drawer 
    v-model="drawer"
    app
    clipped
    mini-variant
    permanent>
        <v-list
        dense
        nav>
            <v-list-item
          v-for="item in items"
          :key="item.title"
          link
        >

        <v-tooltip right>
          <template v-slot:activator="{ on }">
            <v-avatar>
              <v-icon v-on="on">{{ item.icon }}</v-icon>
            </v-avatar>
          </template>
          <span>{{ item.title }}</span>
        </v-tooltip>
          

        </v-list-item>

        </v-list>
        
    </v-navigation-drawer>
</template>

<script>
export default {
    data () {
      return {
        items: [
          { title: 'Dashboard', icon: 'mdi-view-dashboard' },
          { title: 'Roster', icon: 'fas fa-user-secret' },
          { title: 'Events', icon: 'fas fa-book-dead' },
          { title: 'Ledger', icon: 'fas fa-scroll' },
          { title: 'Settings', icon: 'fas fa-cogs' },
        ],
        right: null,
      }
    },
}
</script>