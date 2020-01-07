@extends('layouts.main')


@section('content')


<div class="row row-lsstar">
  <div class="col col-logo">
    <img src="img/logo.png " class="img-fluid mx-auto d-block sombra" alt="Ls Star Incorporadora">
  </div>
</div>
<!-- <div class="row">
<div class="col-sm-6">
<img src="img/home-panfleto.png" class="img-fluid mx-auto d-block" alt="Ls Star Incorporadora">

</div>
<div class="col-sm-6">

<video class="black" id="meuvideo" width="100%" height="100%" type="video/mp4" loop controls autoplay>
          <source src="{{url('/video/video-externo-e-interno.mp4')}}"> Seu navegador não tem suporte.
        </video>
</div>
</div> -->
<div class="row float-center row-space">
  <div class="col-md-12">
    <img src="img/home-panfleto.png" class="img-fluid mx-auto d-block img-60" alt="Ls Star Incorporadora">
  </div>
</div>
<div class="row row-space justify-content-md-center">
  <!-- <div class="col-md-4">
    <span class="font-weight-bold text-center">
      <p class="text-center">
       
        <a class="" href="{{url('/arilene')}}">
          Rua Arilene Farinazzo
          <br>Casa 4</a> <br><br>
        <a target="_blank" href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">
          Simulador de Financiamento <img src="img/minhacasaminhavida.png" class="img-fluid img-minha-casa-minha-vida img-thumbnail mx-auto d-block" alt="Minha casa minha vida">
        </a>
      </p>

  </div> -->
  <div class="col-md-12 mx-auto d-block text-center ">
      <!-- <span class="font-weight-bold text-center texto-las-palmas"> Jardim Las Palmas <br> Lançamento </span> -->
    
     <div class="col">
        <video class="black" id="meuvideo" width="100%" height="100%" type="video/mp4" loop controls autoplay>
          <source src="{{url('/video/video-externo-e-interno.mp4')}}"> Seu navegador não tem suporte.
        </video>
     </div>
  </div>
</div>




<!-- Modal -->
<!-- <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="img/index/sobrados_novos.png" class="img-fluid mx-auto d-block" alt="Promoção">
        
        
      </div>
     
    </div>
  </div>
</div> -->

<style>
.img-60{
  max-width:50%;
}
.row-space{
  margin-top:5px;
}
</style>
@endsection