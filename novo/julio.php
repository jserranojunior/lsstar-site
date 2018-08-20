<?php 
  include('view/layouts/header.php');
  include('view/layouts/sidebarmenu.php');
  ?>

<div class="col-lg-6">
  <div class="col-xs-6 mapa">
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="nav-item">
          <a href="#fotos" class="nav-link  active" aria-controls="profile" role="tab" data-toggle="tab">Fotos</a>
        </li>
        <li class="nav-item">
          <a href="#home" class="nav-link" aria-controls="home" role="tab" data-toggle="tab">Descrição</a>
        </li>
        <li role="nav-item">
          <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab">Mapa</a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="fotos">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
          </div>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.1531888362483!2d-46.287653085014774!3d-23.955022584489004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce017e2297e8fd%3A0x276d7a50716830fc!2sR.+J%C3%BAlio+Pedro+Pontes%2C+445+-+Jardim+Monteiro+da+Cruz+(Vicente+de+Carvalho)%2C+Guaruj%C3%A1+-+SP%2C+11462-300!5e0!3m2!1spt-BR!2sbr!4v1455806806275"
              width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('view/layouts/rightbarfacebook.php'); 
 include('view/layouts/escritorioevendas.php');
  include('view/layouts/footer.php'); ?>