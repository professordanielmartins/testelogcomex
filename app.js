new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  components: {
    'layout': httpVueLoader('Layout.vue'),
    'tela-graficos': httpVueLoader('TelaGraficos.vue'),
    'tela-detalhes': httpVueLoader('TelaDetalhes.vue')
  },
  template: `
    <v-app>
      <layout></layout>
      <tela-graficos></tela-graficos>
      <tela-detalhes></tela-detalhes>
    </v-app>
  `
});

