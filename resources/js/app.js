require('./bootstrap');

window.Vue = require('vue');

Vue.component('usuario-component', require('./components/UsuarioComponent.vue').default);
Vue.component('indexcotizacion-component', require('./components/IndexCotizacionComponent.vue').default);
Vue.component('createcotizacion-component', require('./components/CreateCotizacionComponent.vue').default);

const  app = new Vue({
  el: '#app',data:{}
})