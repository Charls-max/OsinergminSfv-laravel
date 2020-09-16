require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('empresas', require('./components/EmpresasComponent.vue').default);

Vue.component('fichas', require('./components/FichasComponent.vue').default);

const app = new Vue({
    el: '#app',
});

require('./companies');
