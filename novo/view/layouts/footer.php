


</div>    <!-- Container -->
    <style>
.text-funcionando{
    color:blue! important;
}
    .w-100 {
    width: 100%!important;
    height: 500px;
}

    .logo-topo>img {
    /* max-width: 258px; */
    margin-top: 3px;
    margin-bottom: 3px;
}

.row-navbar{
    margin-bottom: 10px;
}
    .row.sidebar-menu {
   /* margin-top: 40px; */
}

    .row-lsstar{
        /* margin-top: 54px; */
    }

img.img-fornecedores{
    max-width: 70px;
    height: 70px;
}
    .footer {
    margin-bottom: 15px;
    padding: 10px;
}

    .fornecedores {
    margin-bottom: 40px;
    padding: 10px;
}

    img.img-minha-casa-minha-vida{
        max-width: 100px;
}

.row-financiamento {
    margin-top: 30px;
   /* margin-top: 113px; */
}

.row-casa {
    margin-top: 50px;
}

    p.text-casa-titulo {
        margin-bottom: 0px;
    margin-top: 13px;
    font-weight: bold;
}

p.text-bold.text-casas {
    margin: 4px 0px 0px 0px;

}

.icon-social-media-header {
    font-size: 2rem;
}

      .row-space{
      margin-top:5px;
      }
      .sombra {
      box-shadow: 0 1px 10px rgba(0,0,0,0.19), 0 2px 2px rgba(0,0,0,0.23);
      }

      .sidebar-left {
    padding-left: 24px;
}

      .navbar{
        padding: .0rem 1rem;
        }

        .nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

      <script>
  
  function isMobile()
  {
    var userAgent = navigator.userAgent.toLowerCase();
    if( userAgent.search(/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i)!= -1 )
      return true;
  }
  
  $isMobile = isMobile();
 
 $(document).ready(function(){
   if($isMobile == true){  
     $(".link-whatsapp").attr("href", "whatsapp://send?phone=5513997791954");         
   }else{
     $(".link-whatsapp").attr("href", "https://web.whatsapp.com/send?phone=5513997791954"); 
   }
 });
 
 
    </script>
  </body>
</html>