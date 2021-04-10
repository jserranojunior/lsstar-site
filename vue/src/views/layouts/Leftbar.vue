<template>
  <div
    class="flex flex-wrap shadow-lg p-4 mx-2 justify-center text-center sm:text-center md:text-left lg:text-left"
  >
    <nav class="navbar w-full">
      <ul>
        <li class="sidebar-nav-item">
          <router-link to="/">Página Inícial</router-link>
        </li>

        <li class="sidebar-nav-item">Quem somos</li>

        <li class="sidebar-nav-item">Projetos Realizados</li>

        <li class="sidebar-nav-sub-item">1 - Av. Caiçaras</li>

        <li class="sidebar-nav-sub-item">2 - Rua Ezio da Gama</li>

        <li class="sidebar-nav-sub-item">3 - Rua Julio Pedro Pontes</li>

        <li class="sidebar-nav-sub-item">4 - Rua Edivaldo Pires</li>

        <li class="sidebar-nav-sub-item">5 - Av. Adriano Dias</li>

        <li class="sidebar-nav-sub-item">6 - Rua Arilene Farinazzo</li>

        <li class="sidebar-nav-item">Imóveis à venda</li>

        <li class="sidebar-nav-sub-item">
          <router-link to="/laspalmas">7 - Jardim Las Palmas</router-link>
        </li>

        <li class="sidebar-nav-sub-item">8 - Attílio Gelsomini</li>

        <li class="sidebar-nav-item">Projetos Futuros</li>

        <li class="sidebar-nav-sub-item">9 - Rua São Paulo - Enseada</li>

        <li class="sidebar-nav-sub-item">10 - Rua Rio Grande do Sul</li>

        <li class="sidebar-nav-sub-item">11 - Chacará João de Barro</li>

        <li class="sidebar-nav-item">
          <router-link to="/contato">Contato</router-link>
        </li>
      </ul>
    </nav>

    <div class="w-full sm:w-1/2 md:w-full shadow-md py-1 mt-4">
      <div class="flex text-center">
        <div class="w-1/4">
          <a
            class="text-blue-600"
            target="_blank"
            href="https://www.facebook.com/lsstarincorporadora/?ref=bookmarks"
          >
            <span class="icon-social-media-header">
              <i class="fab fa-facebook-square fa-2x"></i>
            </span>
          </a>
        </div>
        <div class="w-1/4">
          <a
            class="text-red-600"
            target="_blank"
            href="https://www.instagram.com/lsstarincorporadora/"
          >
            <span class="icon-social-media-header">
              <i class="fab fa-instagram fa-2x"></i>
            </span>
          </a>
        </div>
        <div class="w-1/4">
          <a class="text-orange-600" href="{{url('/contato')}}">
            <span class="icon-social-media-header">
              <i class="far fa-envelope fa-2x"></i>
            </span>
          </a>
        </div>
        <div class="w-1/4">
          <a
            class="text-green-600 link-whatsapp btn"
            href="whatsapp://send?phone=5513997791954"
          >
            <span class="icon-social-media-header">
              <i class="fab fa-whatsapp fa-2x"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Leftbar",
};
</script>
