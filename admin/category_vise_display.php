<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("db.php");
 ?>

<html>
<head>
	<style>
		body{background-color: #fff !important;}
		#main{
			width:100%;
			padding: 10px;
		}
		.product_set{
			float: left;
			border: 1px groove red;
			width: 25%;
			height: 300px;
			margin: 15px;
			background: #B49595;
		}
		
		.product_set:hover{
		background-color: #fff;}
		
		.img{
			height: 150px;
			width: 100%;
		}
		
		.title{
			height: 5px;
			padding: 10px;	
			font-size: 15px;
		}
		
		.desc{
			height: 10px;
		}
		
		.price{
			text-align: left;
			padding: 1px;
					}
	.product_set>a{
		text-decoration: none;}
	
		nav ul{list-style: none;text-align: center; float:left;}
		nav ul li{float:left; width: 150px; margin-left: 50px; line-height: 50%;	}
		nav ul li>a{text-decoration: none;
		color:##5C3C3C;}
		
		.design{
			 float: left;
			 margin-left: 20px;
			 padding: 20px;
			 
		}
		
		.design .a{text-decoration: none;
		}
		
	
	</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg">
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../bootstrap/css/nav.css">

<link rel="stylesheet" href="adminpanel.css">
<link rel="stylesheet" href="../css/menufooter.css">



<title>Admin Panel</title>

</head>

<body>

    
     <a href="../page/category.php" style="background-color:#666; margin-left:15px; text-decoration:none; color:#fff;" class="btn btn-default">BACK</a>
    

	
<div style="height: 150vh">
<div id="main" style="text-align: center;">
				  <table border="0" cellspacing="20" cellpadding="10px" style="text-align: center;">
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'restra');
$category_id = $_REQUEST['category_id'];


$sel="SELECT * FROM menus WHERE category_id='$category_id'";
$run = mysqli_query($con,$sel);

while($specific_product=mysqli_fetch_array($run,MYSQLI_BOTH)){	
				 $image_id=$specific_product["product_id"];
				 $image_name=$specific_product["product_img"];
				 $product_title=$specific_product["product_title"];
				 $product_price=$specific_product["product_price"];
				 $product_desc=$specific_product["product_desc"];
				 ?>	<div class="product_set">
					
					<a href="display_specific.php?product_id=<?php echo $image_id;?>"><img class="img" src="uploaded_images/<?php echo $image_name; ?>" />
					  <p class="title"><?php echo $product_title;?></p><br>
					<p class="desc"><?php echo $product_desc ?></p><br></a>
					 <div class="row">
                         <div class="col-sm-6">
					<p class="price" style=" margin:15px;"><b><?php echo $product_price ?>/-</b></p>
                      </div>
                         <div class="col-sm-6">
					<a class="btn btn-success check" style="margin:15px;" 
         href="../assign/cartcode.php?product_id=<?php echo $image_id;?>&product_price=<?php echo $product_price;  ?>">Add To cart</a>
                      </div>
                      </div>
                      </div> 
                      
					  <?php }
		  ?>
	   </table>
		  </div>
</div>
	
	
	

</body>
</html>