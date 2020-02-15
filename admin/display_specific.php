<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("../admin/db.php");
 ?>

<html>
<head>
	<style>
		#main{
			border: 1px solid red;
			height: 195px;
			width:70%;
			padding: 5px;
			margin:100 auto;
			text-align: center;
			background: #fff;
			}
		
		.specific_set{
			
		}
		.img{
			height: 180px;
			width: 360;
            
		}
		
		
	</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">



<title>Display Specific Product</title>

</head>

<body>
     <a href="../page/orderonline.php" style="background-color:#666; margin-left:15px; text-decoration:none; color:#fff;" class="btn btn-default">BACK</a>
<div style="height: 40vh; margin-top:100px;">
 <div id="main" style="text-align: center;">
 				  <table border="0" cellspacing="20" cellpadding="10px" style="text-align: center;">
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'restra');
$product_id = $_REQUEST['product_id'];


$sel="SELECT * FROM menus WHERE product_id='$product_id'";
$run = mysqli_query($con,$sel);

while($specific_product=mysqli_fetch_array($run,MYSQLI_BOTH)){	
				 $image_id=$specific_product["product_id"];
				 $image_name=$specific_product["product_img"];
				 $product_title=$specific_product["product_title"];
				 $product_price=$specific_product["product_price"];
				 $product_desc=$specific_product["product_desc"];
				 ?>	
                      
                <div class="specific_set">
					<div class="col-md-5">
                        <img class="img" src="uploaded_images/<?php echo $image_name; ?>" />
				    </div>
                    <div div class="col-md-6 pull-left"> 
                        <p class="title"><b><?php echo $product_title;?></b></p>
					    <p class="desc"><?php echo $product_desc ?></p>
					    <p class="price"><b><i class="fa fa-inr" aria-hidden="true"></i>
                            <?php echo $product_price ?>/-</b></p>
                        
                    <p style="margin-top:40px;"><a class="btn btn-success check"         
         href="../assign/cartcode.php?product_id=<?php echo $product_id;?>&product_price=<?php echo $product_price;  ?>">Add To cart</a>
              </p></div>
                </div>
     
					  <?php }
		  ?>
	   </table>
		  </div>
   </div>




<div class="modal-footer"></div>
<div><?php include("../page/footer.php"); ?></div>


</body>
</html>