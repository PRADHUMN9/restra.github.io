<center><h2>Display All Products</h2></center>
		  <br/>
		  <table border="0" cellspacing="20" cellpadding="10px" style="text-align: center;">
		  <?php
			global $con;
		 	$sql="SELECT * FROM menus order by rand() Limit 0,6";
			$record=mysqli_query($con,$sql);
		  	while($row_display_all_menus=mysqli_fetch_array($record,MYSQLI_BOTH)){
				
				 $image_name=$row_display_all_menus["product_img"];
				 $product_title=$row_display_all_menus["product_title"];
			?>	<div id="single_product">
				   <img style="height:200px; width:200px; margin-top:15px" src="uploaded_images/<?php echo $image_name; ?>" />
				   <p id="id_product"><?php echo $product_title;?></p>
					   <p><a href="#">Details</p></a>
			    </div>
				<?php
			}
			?>
			  </table>