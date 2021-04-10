import { createApp } from "vue";
import App from "./App.vue";
import "./assets/styles/tail.css";
import router from "./router";
import slifer from "slifer";

createApp(App)
  .use(router)
  .use(slifer)
  .mount("#app");
