<?php
session_start(); 
require_once "conn.php"; 
require_once "function.php"; 
?>

<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $title_web;?></title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<!--theme-style-->
<link href="css/style copy.css" rel="stylesheet" type="text/css" media="all" /> 

<link href="css/owl.carousel.css" rel="stylesheet">

<!--fonts-->
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>

<!-- ckeditor-->
<script src="plugins/ckeditor/ckeditor.js"></script>

<!-- icon web -->
<link rel="shortcut icon" href="images/banner/icon.png">


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- requried-jsfiles-for owl -->
<script>
$(document).ready(function() {
$("#owl-demo").owlCarousel({
items : 5,
lazyLoad : true,
autoPlay : true,
navigation : true,
navigationText :  true,
pagination : false,
});
});
</script>
<!-- //requried-jsfiles-for owl -->
  
</head>

<body>

<?php
//add to cart
if($_REQUEST['data']=='cart'){

if($_SESSION['ses_user_id']){
  Add_Cart($_REQUEST['pro_id']);
}
else {

  Alert('กรุณาเข้าสู่ระบบก่อน!','login.php');
}
}


//ตรวจสอบการออกจากระบบ
if($_REQUEST['logout']=='chk'){
Logout($_SESSION['ses_user_id'],'index.php');
}
?>

<!--header-->
  
  <div class="header">
    <div class="logo">
    <img src='images/banner/icon.png'>
    </div>
    <div  class="header-top">
      <div class="header-grid">
        <ul class="header-in">
            <?php if($_SESSION['ses_user_id']){?>
            <li class="text-info" style="font-size:18px;">Welcome: <b><?php echo $_SESSION['ses_user_user'];?></b></li>
            <li class="small"><a href="history_order.php" class="text-danger">VIEW HISTORY</a></li>
            <li class="small"><a href="?logout=chk" class="text-danger">LOG OUT</a></li>
            <li class="small"><a href="cart.php" > <img src='images/shortcut_icon/logo2.png'>  :  <?php Total_Cart();?></a>
            </ul> 
            
            <?php } ?>

      </div>
      </div>
      <div class="header-bottom">
        <div class="h_menu4"><!-- start h_menu4 -->
        <a class="toggleMenu" href="#">Menu</a>
        <ul class="nav">
          <li class="active"><a href="index.php">HOME</a></li>
          <?php if(!$_SESSION['ses_user_id']){?><li><a href="register.php">REGISTER</a></li><?php } ?>
          <?php if(!$_SESSION['ses_user_id']){?><li><a href="login.php">LOG IN</a></li><?php } ?> 
          <li><a href="#">PRODUCT CATEGORY <i> </i></a>
            <ul>
            <li><a href="Product_fantasy.php">Fantasy & Fight</a></li>
              <li><a href="Product_School.php">School & Romance & Comedy </a></li>
              <li><a href="Product_Sport.php">Sport</a></li>
            </ul>  
        </ul>
        
        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
      <div class="clearfix"> </div>
    </div>
    </div>
    <div class="clearfix"> </div>
    
  <div class="container1">
    <div class="banner1">
    <img src='images/banner/banner.png'>
  </div>
  </div>

  </div>
<!---->
<div class="content">
  <div class="sport-your">


    