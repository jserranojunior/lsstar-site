
<template>
  <Main>
    <template v-slot:main>
      <router-view></router-view>
    </template>
  </Main>
</template>
<script lang="ts">
import Main from "./views/layouts/Main.vue";

export default {
  name: "App",
  components: {
    Main,
  },
}
</script>

