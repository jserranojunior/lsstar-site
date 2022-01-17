<template>
  <div class="flex justify-center">
    <div class="w-full sm:w-full md:w-full lg:w-full xl:w-10/12">
      <div class="flex flex-wrap justify-center">
        <div class="sm:w-full md:w-1/3 lg:w-1/4">
          <Leftbar></Leftbar>
        </div>
        <div class="sm:w-full md:w-2/3 lg:w-2/4 shadow-lg px-2 pb-2">
          <slot name="main"></slot>
        </div>
        <div class="sm:w-full md:w-full lg:w-1/4 hidden sm:hidden md:hidden lg:block">
          <Rightbar></Rightbar>
        </div>
        <Footer></Footer>
      </div>
    </div>
  </div>
</template>

<script>
import Rightbar from "./Rightbar.vue";
import Leftbar from "./Leftbar.vue";
import Footer from "./Footer.vue";

export default {
  name: "Main",
  components: {
    Rightbar,
    Leftbar,
    Footer
  }
};
</script>
