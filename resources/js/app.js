

require('./bootstrap');

window.Vue = require('vue');


//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('thought-component', require('./components/ThoughtComponent.vue'));
Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('thoughts-component', require('./components/MyThoughtsComponent.vue'));
const app = new Vue({
    el: '#app'
});
