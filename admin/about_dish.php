<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("db.php");
 ?>

<html>
<head>
	<style>
		
		#main{
			width:100%;
			padding: 10px;
		}
		.product_set{
			float: left;
			border: 3px groove red;
			width: 30%;
			height: 350px;
			margin: 15px;
			background: #B49595;
		}
		
		.product_set:hover{
		background-color: #fff;}
		
		.img{
			height: 150px;
			width: 400px;
		}
		
		.title{
			height: 5px;
			padding: 20px;	
			font-size: 15px;
		}
		
		.desc{
			height: 60px;
		}
		
		.price{
			text-align: left;
			padding: 20px;
					}
	.product_set a{
		text-decoration: none;}
		
	
	</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link rel="stylesheet" href="../../../bootstrap/font/fontawesome-webfont.svg">
<link rel="stylesheet" href="../../../bootstrap/font/glyphicons-halflings-regular.svg">

<link rel="stylesheet" href="adminpanel.css">


<title>Admin Panel</title>

</head>

<body>
      <div id="main" style="text-align: center;">
				  <table border="0" cellspacing="20" cellpadding="10px" style="text-align: center;">
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'order_online');
$product_id = $_REQUEST['product_id'];


$sel="SELECT * FROM menus WHERE product_id='$product_id'";
$run = mysqli_query($con,$sel);

while($about_dish=mysqli_fetch_array($run,MYSQLI_BOTH)){	
				 $product_id=$about_dish["product_id"];
				 $image_name=$about_dish["product_img"];
				 $product_title=$about_dish["product_title"];
				 $product_price=$about_dish["product_price"];
				 $product_desc=$about_dish["product_desc"];
				 ?>	<div class="product_set">
					
					<img class="img" src="uploaded_images/<?php echo $image_name; ?>" />
					  <p class="title"><?php echo $product_title;?></p><br>
					<p class="desc"><?php echo $product_desc ?></p><br>
					  
					 <p class="price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $product_price ?>/-</p></div>
					  <?php }
		  ?>
	   </table>
		  </div>
</body>
</html>