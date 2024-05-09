<template>
  <v-app>
    <menu-superior></menu-superior>
    <v-content>
      <v-container>
        <v-layout>
          <v-flex xs4>
            <barra-lateral></barra-lateral>
          </v-flex>
          <v-flex xs8>
            <router-view></router-view>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import MenuSuperior from './MenuSuperior.vue';
import BarraLateral from './BarraLateral.vue';

export default {
  components: {
    MenuSuperior,
    BarraLateral,
  },
};
</script>

