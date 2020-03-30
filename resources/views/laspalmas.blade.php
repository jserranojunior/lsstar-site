@extends('layouts.main') @section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <span class="text-center">
            <span >
          <h4 class="font-weight-bold text-top-without-space text-lsstar ">
              Jardim Las Palmas
              <br>
              Lançamento
          </h4>
        </span>
        <br>
          <p>Obras em estágio avançado.<br>
          Projeto - Arq. Jair Correia de Souza.</p>
        </span>

        <p>Rua Ranulfo Veríssimo, 180 - Jardim Las Palmas, Astúrias
          <br> Guarujá - SP, CEP: 11420-495</p>
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
          <a href="#fotos" class="nav-link  active" aria-controls="profile" role="tab" data-toggle="tab">Video</a>
        </li>

        <li role="nav-item">
          <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab">Mapa</a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="fotos">

          <video class="black" id="meuvideo" width="100%" height="100%" type="video/mp4" loop controls autoplay>
            <source src="{{url('/video/video-externo-e-interno.mp4')}}"> Seu navegador não tem suporte.
          </video>

          <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/julio/1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./img/julio/2.png" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./img/julio/3.jpg" alt="">
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
              </div> -->
        </div>
        <div role="tabpanel" class="tab-pane" id="home">
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
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
          <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29157.822442027868!2d-46.30866856786078!3d-24.00538715569939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1fdfb9d341bd1%3A0xd68abe95d6534b7c!2sJardim+Las+Palmas%2C+Guaruj%C3%A1+-+SP!5e0!3m2!1spt-BR!2sbr!4v1534963514520"
              width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection