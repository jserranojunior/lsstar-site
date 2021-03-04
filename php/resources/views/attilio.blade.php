@extends('layouts.main') @section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <span class="text-center">
            <span>
              <h4 class="font-weight-bold text-top-without-space text-lsstar ">
                  Attílio Gelsomini                  
              </h4>
              <br>
          </span>       
        </span>

        <p>Rua Attílio Gelsomini, 363 - Vila Santa Rosa
          <br> Guarujá - SP, CEP: 11431-130 </p>

          <p>
              <span class="text-primary font-weight-bold">
              R$ 210.000,00 </span><br>
              Características do imóvel:  Casa sobreposta com 83m² em excelente localização, sem taxa de condomínio,
              negociação direta com o proprietário. 
              Comércios, padaria, supermercado, lojas e farmácia 
              a pouca caminhada do local. Sala e cozinha ampla e bem arejada, 
              3 quartos (1 suite), 2 banheiros, garagem coberta, 
              churrasqueira de uso comum. 
             
              
            </p>
      </div>
    </div>

  </div>
</div>
<div class="row row-space">
  <div class="col mapa">
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="nav-item">
          <a href="#fotos" class="nav-link  active" aria-controls="profile" role="tab" data-toggle="tab">Fotos</a>
        </li>

        <li role="nav-item">
          <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab">Mapa</a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="fotos">

          <!-- <video class="black" id="meuvideo" width="100%" height="100%" type="video/mp4" loop controls autoplay>
            <source src="{{url('/video/video-externo-e-interno.mp4')}}"> Seu navegador não tem suporte.
          </video> -->

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/attilio/1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/2.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/3.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/4.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/5.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/6.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/7.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/8.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/9.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/10.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/11.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/12.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/13.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/14.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/15.jpg" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100"  src="./img/attilio/16.jpg" alt="">
                  </div>
                  
                  
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <!-- <div role="tabpanel" class="tab-pane" id="home">
          <h3>Casas à venda</h3>
          Rua Julio Pedro Pontes, 445 Jd Monteiro da Cruz, Vicente de Carvalho - Sp
          <h4>Casa 2 e 3 -
            <span class="text-primary">VENDIDO</span>
            <span class="text-danger"></span>
          </h4>
          Características do imóvel: Sobrado germinado frente, 2 quartos, lavabo, sacada, garagem privativa
          <br>
          <h4>Casa 1 e 4 -
            <span class="text-primary">VENDIDO</span>
            </span>
            <span class="text-danger"></span>
          </h4>
          Características do imóvel: Sobrado geminado fundo, 2 quartos, lavabo, quintal, garagem privativa.
        </div> -->
        <div role="tabpanel" class="tab-pane" id="profile">
          <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1822.502544082522!2d-46.27653066322251!3d-23.995597420664925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1fe1cd512fcbd%3A0xba1af3efc65e4f92!2sR.%20At%C3%ADlio%20Gelsomini%2C%20363%20-%20Vila%20Santa%20Rosa%2C%20Guaruj%C3%A1%20-%20SP%2C%2011431-130!5e0!3m2!1spt-BR!2sbr!4v1585337027487!5m2!1spt-BR!2sbr" 
           width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection