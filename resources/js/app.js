
import Vue from "vue";
import router from "./routes";
import App from "./App.vue";
import './bootstrap';

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
