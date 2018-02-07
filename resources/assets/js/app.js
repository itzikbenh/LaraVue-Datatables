require('./bootstrap');

window.Vue = require('vue');

Vue.component('projects', require('./components/Projects.vue'));
Vue.component('projects-client-side', require('./components/ProjectsClientSide.vue'));

const app = new Vue({
    el: '#app',
});
