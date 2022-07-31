import './bootstrap';

import { createApp } from 'vue';

import index from './Pages/IndexComponent.vue'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import { Ziggy } from './ziggy';



const app = createApp(index)
app.use(ElementPlus, Ziggy)
app.mount('#app')
