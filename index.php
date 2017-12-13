<?php include('header.php'); ?>









 <div class=" col-md-offset-1 col-md-10 col-xs-12">
                  <img class="center-block img-responsive " src="casa.jpg"/>
              </div>
         



<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      

<div class="modal-header">
            <button type="button" class="fechar close"  data-dismiss="modal" aria-label="Close" onclick="pauseVid()"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center title-video" id="myModalLabel">Lançamento para 2018 nos Asturias</h4>
      </div>


      <div class="modal-body">

      
        <video class="black" id="meuvideo" width="100%" height="270" type="video/mp4" preload="none" autoplay>
<source src="http://www.lsstar.com.br/video/sobrado-asturias.mp4">
Seu navegador não tem suporte.
        </video> 
</div>


<div class="modal-footer">
       <button type="button" onclick="pauseVid()" class="fechar btn btn-default" data-dismiss="modal">Fechar</button>
        <a href="http://lsstar.com.br/asturias.php"><div class="btn btn-primary">Saiba mais</div></a>
        </div>


       
      </div>
      
    </div>
  </div>


<style>



video#meuvideo {
    margin-top: -60px;
    padding: 0;
}


.rodape-video {
    margin-top: -60px;
}

.modal-content {
 width: 81%! important;
    height: auto;
    margin-left: 48px;
      margin-top: 31.2%;
}

.modal-body {
    position: relative;
    padding: 0px;
}

.rodape-video {
    margin-top: -54px;
}

.modal-title {
    margin-bottom: 43px;
    margin-top: 0px;
    line-height: 1.42857143;
}

.modal-footer {
    padding: 3px;
}

</style>

<script>


    
var vid = document.getElementById("meuvideo"); 
function pauseVid() { 
    vid.pause(); 
}


$(document).ready(function() {

$('body').click(function(){
  pauseVid();
});

$('#myModal').modal('show');
   });

</script>
        

<?php include('footer.php'); ?>