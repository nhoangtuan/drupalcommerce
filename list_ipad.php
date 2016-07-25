<?php 
include('lang/define_lang.php')
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
</head>
<?php 
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=project','root','09102010');
  $pdo->query('set names utf8');
  $sql='select * from san_pham where ma_loai=1';
  $maytinhbang = $pdo->query($sql);
  
}

catch (PDOException $ex)
{
  $ex->getMassge();
}

?>
<body>
  
<?php include("include/head.php") ?>
<?php include("include/slider.php") ?>

 <div id="product"> 
        <h2><?php echo _tablet?></h2>  
           <?php
          foreach($maytinhbang as $i)
          {
          ?>
            <div class="warpper_product">
              <div class="img_product">
                  <img src="images/hinh_san_pham/<?php echo $i['hinh']?>" width="150px" height="130px">
                  
              </div>
              <div class="info_product">
                    <h4>
                  <?php
                    if($_SESSION['lang']==1)
                    {
                        echo $i['ten_sp'];
                    }
                    else if($_SESSION['lang']==2)
                    {
                        echo $i['ten_sp_en'];
                    } 
                   ?>
                   </h4>
                  <h5><?php echo number_format($i['don_gia'])?> đ</h5>
                  <a href="include/product_detail_ipad.php?ma_sp=<?php echo $i['ma_sp']?>"><input type="button" value="<?php echo _button?>"></a>
              </div>
              
            </div> 
            <?php
              }
            ?>  
        
 

  </div>
  <div class="clear">  </div>

<?php include("include/footer.php") ?>

</body>
</html>