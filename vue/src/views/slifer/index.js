import btn from "./components/btn.vue";
import spinner from "./components/spinner.vue";

export default {
  install(Vue) {
    Vue.component("SBtn", btn);
    Vue.component("SSpinner", spinner);
  },
};
