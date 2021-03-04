import { createWebHistory, createRouter } from "vue-router";
import Home from "@/modules/institucional/home";
import Laspalmas from "@/modules/institucional/laspalmas";
import Contato from "@/modules/institucional/contato";

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
  history: createWebHistory(),
  routes,
});

export default router;
