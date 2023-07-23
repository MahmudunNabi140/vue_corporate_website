
import './bootstrap';
import router from './router';
import store from './store';
import { createApp } from 'vue';
const app = createApp({});

app.use(router)
app.use(store)
app.mount('#app');