<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("../admin/db.php");
 ?>

<html>
<head>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<style>
		#single_product{
			float: left;
			width: 25%;
			height: 400px;
			z-index: 2;
			
		}
		
		#single_product:hover{
			transform: scale(1.1);
			transition:transform 2s;
			
		}
		
		#id_product{
			font-family: cursive;
            font-size: 16px;
            color: white;
		}
		
		.check{
			
			top: 50%;
		}
		
		
	
	
	
	</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="adminpanel.css">


<title>Admin Panel</title>

</head>

<body>
      <div id="display_all_product" style="text-align: center;"><br>
<br>
<br>
		  <br/>
		  <table border="0" cellspacing="20" cellpadding="10px" style="text-align: center;">
		  <?php
			global $con;
		 	$sql="SELECT * FROM menus order by rand() Limit 0,20";
			$record=mysqli_query($con,$sql);
		  	while($row_display_all_menus=mysqli_fetch_array($record,MYSQLI_BOTH)){
				
				 $image_name=$row_display_all_menus["product_img"];
				 $product_id=$row_display_all_menus["product_id"];
                 $product_price=$row_display_all_menus["product_price"];
                
				 $product_title=$row_display_all_menus["product_title"];
			?>	<div id="single_product">
				   <img style="height:250px; width:260px; margin-top:15px; border-radius: 5px;" src="../admin/uploaded_images/<?php echo $image_name; ?>" />
				   <p id="id_product"><?php echo $product_title;?></p>
              <p><a class="btn btn-success check" href="../admin/display_specific.php?product_id=<?php echo $product_id;?>">Details</a></p>
              
  <p>
      
      <a class="btn btn-success check" 
         
         href="../assign/cartcode.php?product_id=<?php echo $product_id;?>&product_price=<?php echo $product_price;  ?>">Add To cart</a>
              </p>
              
			    </div>
          <?php
			}
			?>
			  </table>

   </div>
</div>


</body>
</html>