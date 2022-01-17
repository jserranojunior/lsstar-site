import { createApp } from 'vue'
import App from './App.vue'
import router from "./router/index"
import "./assets/styles/tail.css";

import slifer from "slifer";
  
createApp(App).use(router).use(slifer).mount('#app')
