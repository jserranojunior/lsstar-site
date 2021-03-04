<template>
  <div class="flex flex-wrap shadow-lg px-4 py-1  justify-center ">
    <div class="w-full mt-2 shadow-md py-1 text-center">
      <div class="flex justify-center items-center">
        <div class="mr-4">
          <a class=" text-gray-600" href="#">
            <span>
              <i class="fas fa-phone-volume fa-2x"></i>
            </span>
          </a>
        </div>
        <div>Telefone: (13) 3354-2278 <br />Celular: (13) 99779-1954</div>
      </div>
    </div>

    <div class="w-full mt-2 shadow-md py-1 text-center ">
      <div class="widget plugin-facebook mx-auto">
        <iframe
          src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flsstarincorporadora%2F&tabs=timeline&width=320&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
          height="450"
          style="border:none;overflow:hidden"
          scrolling="no"
          frameborder="0"
          allowTransparency="true"
          allow="encrypted-media"
        ></iframe>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "Rightbar",
  };
</script>
<style>
  iframe {
    width: 100% !important;
  }
</style>
