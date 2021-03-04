<template>
  <div>
    <Main>
      <template v-slot:main>
        <router-view></router-view>
      </template>
    </Main>
  </div>
</template>

<script>
  import Main from "./views/layouts/Main";

  export default {
    name: "App",
    components: {
      Main,
    },
  };
</script>
