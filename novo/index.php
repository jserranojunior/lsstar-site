<?php 
  $pagina = "inicio";
  include('view/layouts/header.php');
 // include('view/layouts/navbar.php');
  include('view/layouts/sidebarmenu.php');
  
  ?>
  
  <div class="col-lg-6">
    <div class="row row-lsstar">
      <div class="col col-logo">
        <img src="img/logo.png " class="img-fluid mx-auto d-block sombra" alt="Ls Star Incorporadora">
      </div>
    </div>
    <div class="row float-center row-casa">
      <div class="col-md">
        <img src="img/casa.jpg" class="img-fluid mx-auto d-block" alt="Ls Star Incorporadora">
      </div>
    </div>
    <div class="row row-financiamento justify-content-md-center">
      <div class="col-md-6">
        <span class="font-weight-bold text-center">
        <p class="text-center">
          <span class="font-weight-bold text-center">
          Imóveis a Venda<br>
      </span>
         <a href="#">Adriano Dias <br> Casa 3</a> <br><br>
         <a href="#">Arilene Farinazzo <br> Casa 3 e 4</a> 
        </p> 
        
      </div>
      <div class="col-md-6 mx-auto d-block text-center">
      <span class="font-weight-bold">
      <a target="_blank"  href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">

       
          Simulador de Financiamento
         
      </a>
        </span>
        
        <img src="img/minhacasaminhavida.png" class="img-fluid img-minha-casa-minha-vida img-thumbnail mx-auto d-block" alt="Minha casa minha vida">
        </a>
      </div>
    </div>
  </div>

 <?php include('view/layouts/rightbarfacebook.php'); 
 include('view/layouts/escritorioevendas.php'); 
 include('view/layouts/fornecedores.php');
  include('view/layouts/footer.php'); ?>