<?php require_once "header1.php";

$ip = $_SERVER['REMOTE_ADDR'];
$conn->query("insert count_page set Cou_Date = now(),Cou_IP = '$ip'");
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <style>

    hr{
    width: 50px;
    height: 2px;
    background-color: #fb774b;
    }

  </style>
</head>

  <body>
    <div class ="product">
  <div class="text-center pt-5">
  <h1>NEW PRODUCT</h1>
  <hr class="mx-auto">
  </div>
  </div>
      <!--//sreen-gallery-cursual---->
    <div class="content-grids">

  <?php $sql = $conn->query("select * from product order by Pro_ID desc limit 0,6");
            while ($show = $sql->fetch_assoc()){
              ?>

    <div class="col-sm-6 col-md-4 grid-product-in">
    <div class="thumbnail">
      <a href="view_product.php?id=<?php echo $show['Pro_ID'];?>" class="lot"><img class="img-responsive" height="130px" width="100px" src="images/product/<?php echo $show['Pro_Img'];?>" alt=""></a>
      <div class="caption">
        <h3><a href="view_product.php?id=<?php echo $show['Pro_ID'];?>"><?php echo iconv_substr($show['Pro_Name'],0,10,'UTF-8').'...';?></a></h3>
        <?php if($show['Pro_Dis']!=""){?>
                <h4  class="text-success">
                <b><S><?php echo number_format($show['Pro_Price'],0);?></S></b>
                </h4>
                <label  class="add-to"><?php echo number_format($show['Pro_Price']-$show['Pro_Dis'],0);?> บาท</label>
                
                <?php } else {?>
                <label  class="add-to">
                <?php echo number_format($show['Pro_Price'],0);?> บาท
                </label>
              STOCK: <?php echo $show['Pro_Amount'];?>
                <?php } ?>
        <p><button type="button" onclick="window.location='?data=cart&pro_id=<?php echo $show['Pro_ID'];?>'" class="btn btn-danger">Add to cart</button></p>
      </div>
    </div>
  </div>

  <?php } Chk_Row($sql);?>



  </div>
  <!---->

  <div class="clearfix"></div>

  <br>
  </body>
</html>
