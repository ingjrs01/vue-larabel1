require('./bootstrap');

window.Vue = require('vue');


Vue.component('thought-component', require('./components/ThoughtComponent.vue').default);



const app = new Vue({
    el: '#app',
});
