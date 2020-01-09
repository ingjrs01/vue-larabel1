require('./bootstrap');

window.Vue = require('vue');

Vue.component('my-thoughts-component', require('./components/MyThoughtsComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('thought-component', require('./components/ThoughtComponent.vue').default);



const app = new Vue({
    el: '#app',
});
