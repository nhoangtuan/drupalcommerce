<?php
  include('lang/define_lang.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<title>Siêu thị Điện máy</title>
<link rel="stylesheet" type="text/css" href="css/style.css"  >
<link rel="stylesheet" href="css/ninja-slider.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/icon.css">
<script src="js/ninja-slider.js" type="text/javascript" ></script>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type=”text/javascript” src=”http://www.google.com/jsapi?key=abcdef“></script>
<script type=”text/javascript”>
google.load(“maps”, “2″,{“other_params”:”sensor=true”});
function initialize() {
var map = new google.maps.Map2(document.getElementById(“map”));
map.setCenter(new google.maps.LatLng(10.798571947792535, 106.66366338729858), 15);
map.openInfoWindow(map.getCenter(), document.createTextNode(“407 Nguyễn Trọng Tuyển, P2, Q.Tân Bình, TPHCM“));
}
google.setOnLoadCallback(initialize);
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {    
  //selector đến menu cần làm việc
  var TopFixMenu = $("#head");
  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
    $(window).scroll(function(){
    // Nếu cuộn được hơn 150px rồi
        if($(this).scrollTop()>150){
      // Tiến hành show menu ra    
        TopFixMenu.show();
        }else{
      // Ngược lại, nhỏ hơn 150px thì hide menu đi.
            TopFixMenu.hide();
        }}
    )
})
</script>
</head>

<body>
<sticknav>
<?php include("include/head.php") ?>
</sticknav>

<?php include("include/slider.php") ?>
<?php include("include/product.php") ?>
  <div class="clear">  </div>
<?php include("include/contact.php") ?>
<?php include("include/footer.php") ?>

</body>
</html>