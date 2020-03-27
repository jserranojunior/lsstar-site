@extends('layouts.main')
@section('content')
<div class="row row-lsstar">
  <div class="col col-logo">
    <img src="img/logo.png " class="img-fluid mx-auto d-block sombra" alt="Ls Star Incorporadora">
  </div>
</div>
<div class="row float-center row-space">
  <div class="col-md-12">
    <img src="img/home-panfleto.png" class="img-fluid mx-auto d-block img-60" alt="Ls Star Incorporadora">
  </div>
</div>
<div class="row row-space justify-content-md-center">
  <div class="col-md-10 mx-auto d-block text-center ">
     <div class="col">
        <video class="black" id="meuvideo" width="100%" height="100%" type="video/mp4" loop controls autoplay>
          <source src="{{url('/video/video-externo-e-interno.mp4')}}"> Seu navegador não tem suporte.
        </video>
     </div>
  </div>
</div>
<style>
.img-60{
  max-width:50%;
}
.row-space{
  margin-top:5px;
}
</style>
@endsection