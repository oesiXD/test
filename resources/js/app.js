
import Router from "./routes";
import App from "./App.vue";
require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('sidebar-component', require('./components/Sidebar.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('admin-component', require('./pages/AdminComponent.vue').default);
Vue.component('login-component', require('./pages/LoginComponent.vue').default);
Vue.component('app', require('./App.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    Router,
    render: h => h(App)
});
