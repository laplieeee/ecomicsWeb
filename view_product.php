<?php require_once "header.php";?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

		<!--//sreen-gallery-cursual---->
	<div class="content-grids">

<?php 
$sql = $conn->query("select * from product where Pro_ID = '$_REQUEST[id]'");
$show = $sql->fetch_assoc();

?>	

	<h2 class="allproduct"><?php echo $show['Pro_Name'];?></h2>

  <hr>

  	<!---->	
	<div class="container">
<div class="single">
				<div class="col-md-12 top-in-single">
					<div class="col-md-5 single-top">	
						
									<img class="etalage_thumb_image img-responsive" src="images/product/<?php echo $show['Pro_Img'];?>" alt="" >
							
					</div>	
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4> <?php echo $show['Pro_Name'];?></h4>
							<h2>
							<p><?php echo $show['Pro_Detail'];?></p></h2>

								<label  class="add-to">ราคา: <?php echo number_format($show['Pro_Price'],0);?> บาท</label>
								
								<h4>STOCK: <?php echo $show['Pro_Amount'];?></h4>
								
								<a href="?data=cart&pro_id=<?php echo $_REQUEST['id'];?>" class="cart">Add to cart</a>
							
						</div>
					</div>
				<div class="clearfix"> </div>
				<div class="product-top">




</body>
</html>