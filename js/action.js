

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




