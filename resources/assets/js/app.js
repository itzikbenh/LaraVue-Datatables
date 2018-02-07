require('./bootstrap');

window.Vue = require('vue');

Vue.component('projects', require('./components/Projects.vue'));

const app = new Vue({
    el: '#app',
});
