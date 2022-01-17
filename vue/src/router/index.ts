import  {createRouter,createWebHashHistory } from "vue-router";

import Home from "../modules/institucional/home.vue";
import Laspalmas from "../modules/institucional/laspalmas.vue";
import Contato from "../modules/institucional/contato.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/laspalmas",
    name: "Las Palmas",
    component: Laspalmas,
  },
  {
    path: "/contato",
    name: "Contato",
    component: Contato,
  },
];

const router = createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: createWebHashHistory(),
  routes, // short for `routes: routes`
})

export default router;
