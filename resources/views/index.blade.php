@extends('layouts.main')


@section('content')


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
  <div class="col-md-4">
    <span class="font-weight-bold text-center">
      <p class="text-center">
        <span class="font-weight-bold text-center">
          Imóveis a Venda
          <br>
        </span>
        <a class="" href="{{url('/adriano')}}">
          Av. Adriano Dias
          <br> Casa 3</a>
        <br>
        <br>
        <a class="" href="{{url('/arilene')}}">
          Rua Arilene Farinazzo
          <br> Casa 3 e 4</a> <br><br>
        <a target="_blank" href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">
          Simulador de Financiamento <img src="img/minhacasaminhavida.png" class="img-fluid img-minha-casa-minha-vida img-thumbnail mx-auto d-block" alt="Minha casa minha vida">
        </a>
      </p>

  </div>
  <div class="col-md-8 mx-auto d-block text-center">
      <span class="font-weight-bold text-center texto-las-palmas"> Jardim Las Palmas <br> Lançamento em Outubro </span>
    <br><br>
     <div class="col">
        <video class="black" id="meuvideo" width="100%" height="100%" type="video/mp4" loop controls autoplay>
          <source src="{{url('/video/video-externo-e-interno.mp4')}}"> Seu navegador não tem suporte.
        </video>
     </div>
  </div>
</div>


@endsection