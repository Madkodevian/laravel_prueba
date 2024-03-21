import './bootstrap';
import { createApp } from 'vue';
import HelloWorld from './components/HelloWorld.vue';
import BooksList from './components/BookList.vue';
import router from "./router";

createApp(HelloWorld).use(router).mount("#app");
//createApp(BooksList).mount("#app")