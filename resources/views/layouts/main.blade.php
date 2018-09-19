<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ls Star</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="stylesheet" href="{{Url('/css/style.css')}}">
  <link rel="shortcut icon" href="{{{ url('/img/lsstar.png') }}}">
</head>

<body>
  <div class="container">

    <div class="row row-space">
      <div class="col-md-12 col-xs-12 col-sm-12 col-lg-3 bg-light">
        <div class="row bg-light">
          @if(app('request')->path() !== '/')
          <div class="col-md-12">
            <a href="{{url('/')}}">
              <div class="logo-topo">
                <img src="{{Url('/img/logo.png')}}" class="img-fluid  sombra" alt="Ls Star Incorporadora">
              </div>
            </a>
          </div>
          @endif
        </div>
        <div class="row justify-content-sm-center">
          <div class=" col-md-6 col-lg-12 ">
            <nav class="navbar navbar-expand-lg navbar-light ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class=" text-dark text-bold" href="{{url('/')}}">
                      <p class="text-casa-titulo text-funcionando text-bold">
                        Página Inícial
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class=" text-dark text-funcionando" href="{{url('/quemsomos')}}">
                      <p class="text-casa-titulo">
                        Quem somos
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">

                    <p class="text-casa-titulo">
                      Projetos Realizados
                    </p>

                  </li>
                  <li class="nav-item">
                    <p class="text-bold text-casas">
                      1 - Av. Caiçaras
                    </p>

                  </li>
                  <li class="nav-item">

                    <p class="text-bold text-casas">
                      2 - Rua Ezio da Gama
                    </p>

                  </li>
                  <li class="nav-item">
                    <p class="text-bold text-casas">
                      3 - Rua Julio Pedro Pontes
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="text-bold text-casas">
                      4 - Rua Edivaldo Pires
                    </p>
                  </li>
                  <li class="nav-item">
                    <a class="" href="{{url('/adriano')}}">
                      <p class="text-bold text-casas">
                        5 - Av. Adriano Dias
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="" href="{{url('/arilene')}}">
                      <p class="text-bold text-casas">
                        6 - Rua Arilene Farinazzo
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class=" text-dark" href="#">
                      <p class="text-casa-titulo">
                        Projeto em Obra
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="" href="{{url('/laspalmas')}}">
                      <p class="text-bold text-casas">
                        7 - Jardim Las Palmas
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <p class="text-casa-titulo">
                      Projetos Futuros
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="text-bold text-casas">
                      8 - Rua São Paulo - Enseada
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="text-bold text-casas">
                      9 - Rua Rio Grande do Sul
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="text-bold text-casas">
                      10 - Chacará João de Barro
                    </p>
                  </li>
                  <li class="nav-item">
                    <a class=" text-dark text-funcionando" href="{{url('/contato')}}">
                      <p class="text-casa-titulo">
                        Contato
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <div class=" col-md-6 col-lg-12 text-center float-center">


            <a class="text-primary btn" target="_blank" href="https://www.facebook.com/lsstarincorporadora/?ref=bookmarks">
              <span class="icon-social-media-header">
                <i class="fab fa-facebook-square"></i>
              </span>
            </a>

            <a class=" text-danger btn" target="_blank" href="https://www.instagram.com/lsstarincorporadora/">
              <span class="icon-social-media-header">
                <i class="fab fa-instagram"></i>
              </span>
            </a>

            <a class=" text-primary btn" href="{{url('/contato')}}">
              <span class="icon-social-media-header">
                <i class="far fa-envelope"></i>
              </span>
            </a>

            <a class="text-success link-whatsapp btn" href="whatsapp://send?phone=5513997791954">
              <span class="icon-social-media-header">
                <i class="fab fa-whatsapp"></i>
              </span>
            </a>

          </div>

        </div>
      </div>
      <div class="col-lg-6">

        @yield('content')

      </div>
      <div class="col-lg-3 bg-light">
        <div class="row justify-content-md-center">
          <div class="widget plugin-facebook">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flsstarincorporadora%2F&tabs=timeline&width=250&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
              width="250" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
              allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-space ">
      <div class="col bg-light">
        <p class="text-center ">
          <span class="font-weight-bold"> Escritório e Vendas</span>
          <br> Av. dos Caiçaras, 31 - CEP: 11420-440 - Jardim Guaiúba - Guarujá - SP | Telefone: (13) 3354-2278 / Celular: (13)
          99779-1954
        </p>
      </div>
    </div>
    <!-- footer -->

    @if(app('request')->path() == '/')
    <div class="fornecedores">
      <div class="row row-space">
        <div class="col">
          <h6 class="text-center font-weight-bold">Parceria</h6>
          <div class="row justify-content-md-center">
            <div class="col">
              <img src="img/polimix.png" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/udiaco.png" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/madeireira.jpeg" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/construmar.jpg" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/casalitoral.jpg" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/universo.jpg" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/cosmostintas.png" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/jaempreiteira.png" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
            <div class="col">
              <img src="img/fantastico.jpg" class="img-fornecedores img-thumbnail" alt="Minha casa minha vida">
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="{{Url('/js/action.js')}}"></script>
</body>

</html>