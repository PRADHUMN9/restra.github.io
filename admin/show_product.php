<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("../admin/db.php");
 ?>

<html>
<head>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<style>
		#single_product{
			
		}
		
		#single_product:hover{
			
			
		}
		
		#id_product{
			
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
      <div id="display_all_product" style="text-align: center; margin:0 30px; margin-left:150px;"><br>
<br>
<br>
		  <br/>
		  <table style="">
		  <?php
			global $con;
		 	$sql="SELECT * FROM menus";
			$record=mysqli_query($con,$sql);
		  	while($row_display_all_menus=mysqli_fetch_array($record,MYSQLI_BOTH)){
				
				 $image_name=$row_display_all_menus["product_img"];
				 $product_id=$row_display_all_menus["product_id"];
                 $product_price=$row_display_all_menus["product_price"];
                
				 $product_title=$row_display_all_menus["product_title"];
			?>	
              
              <div style="float: left; width: 20%; height: 300px;	z-index: 2; border:1px solid black; background:#fff;  margin: 10px 10px;">
				   <img style="height:200px; width:230px;  border-radius: 5px;" src="../admin/uploaded_images/<?php echo $image_name; ?>" />
				   <p style="font-family: cursive; font-size: 12px;color: white;"><?php echo $product_title;?></p>
              <p><a class="btn btn-success" href="../admin/update_product.php?product_id=<?php echo $product_id;?>">Update</a>
                <a class="btn btn-info check" href="../admin/display_specific_1.php?product_id=<?php echo $product_id;?>">Details</a>
              <a class="btn btn-success check" href="../admin/delete_product.php?product_id=<?php echo $product_id;?>&product_price=<?php echo $product_price;  ?>">Delete</a>
                  
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