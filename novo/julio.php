<?php 
  include('view/layouts/header.php');
  include('view/layouts/navbar.php');
  include('view/layouts/sidebarmenu.php');
  ?>
  
  <div class="col-lg-6">
   <div class="col-xs-6">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/julio/1.png" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="./img/julio/2.png" alt="">
    </div>
    <div class="carousel-item">
    <!--     <img class="d-block w-100" src="./img/julio/3.jpg" alt=""> -->
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
  


  </div>

 <?php include('view/layouts/rightbarfacebook.php'); 
 include('view/layouts/escritorioevendas.php'); 

  include('view/layouts/footer.php'); ?>