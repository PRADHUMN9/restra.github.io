<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("db.php");
 ?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="adminpanel.css">


<title>Admin Panel</title>

</head>

<body>
<div id="header" class="pull-center">
  <ul id="navbar">
     <li style="background:none;"> <a href="#">Home</a></li>
     <li style="background:none;"> <a href="#">About</a></li>
     <li style="background:none;"> <a href="contact_us.php">Contact Us</a></li>
     <li style="background:none;"> <a href="#">cjkljk</a></li>
     <li style="background:none;"> <a href="#">jliaioj</a></li> 
           
  </ul>
</div>

<div id="section">
  <div id="message_bar">
    Add/ Insert Products
  </div>
	
   <div id="data_bar">
   	  <div id="left_data_bar">
         <center><h1>Categories</h1></center>
         <ul>
         <?php
		   global $con;
           $get_categories= "select * from categories";
		   $run_get_categories=mysqli_query($con, $get_categories);
		   while($row_run_get_categories=mysqli_fetch_array($run_get_categories))
		   {
			   $category_id=$row_run_get_categories["category_id"];
			   $category_name=$row_run_get_categories["category_name"];
			   echo "<li><a href='menubarandfooter.php?cat=$category_id'>$category_name</a></li>";		   
			   }
		    ?>
         </ul><br>
      </div>
      <div id="right_data_bar">
		 <form name="insert_products" action="insert_product.php" method="post" onctype="multipart/form-data" style="padding: 50px; padding-left: 100px;">
		   <table width="95%" align="center" cellpadding="5" cellspacing="20">
			 <tr>
			   <td id="dec">Product Title</td>
			   <td><input type="text" name="product_title" placeholder="Product Title" id="insert_product_form_title"></td>			   
			 </tr>
			   
			 <tr>
			   <td id="dec">Select Category</td>
			   <td><select name="category_id"  id="insert_product_form_cat">
				 <option value="Select Category" selected="selected" disabled="disabled">Select Category</option>
				   <?php
				   	global $con;
           			$get_categories= "select * from categories";
		   			$run_get_categories=mysqli_query($con, $get_categories);
		     			while($row_run_get_categories=mysqli_fetch_array($run_get_categories))
						{
			   			  $category_id=$row_run_get_categories["category_id"];
			   			  $category_name=$row_run_get_categories["category_name"];
			   			  echo "<option value='$category_id'>$category_name</option>";		   
			   }
		    ?>
			   </select></td>			   
			 </tr>
			   
			 <tr>
			   <td id="dec">Product Image</td>
			   <td><input type="file" name="product_img"></td>			   
			 </tr>
			   
			 <tr>
			   <td id="dec">Product Price</td>
			   <td><input type="number" name="product_price" min="1" max="10000" placeholder="Price" id="insert_product_form_price"></td>			   
			 </tr>
			   
			  <tr>
			   <td id="dec">Product Description</td>
			   <td><textarea name="product_desc" rows="10" cols="30" placeholder="Type Product Description" id="insert_product_form_desc"></textarea></td>			   
			 </tr>
			   
			 <tr>
			   <td id="dec">Product Keyword</td>
			   <td><input type="text" name="product_keyword" placeholder="Type Product Keyword" id="insert_product_form_key"></td>			   
			 </tr>
			   
			 <tr>
			   <td style="color: #000">&nbsp;</td>
			   <td><input type="submit" name="submit" Value="Add Product" id="btn"></td>			   
			 </tr>
			  
			 
			 </table>
		  
		  </form>
      </div>
   </div>
</div>


</body>
</html>

<?php
  if(isset($_POST['submit'])){
	$product_title="";
	$product_category="";
	$product_img_name="";
	$product_img_tmp_name="";
	$product_img_size="";
	$product_img_type="";
	$product_price="";
	$product_desc="";
	$product_keyword="";
	$status="";
	  
	  
	$product_title=$_POST['product_title']; 
	$product_category=$_POST['category_id'];
	$product_img_name=$_FILES['product_img']['name'];
	$product_img_tmp_name=$_FILES['product_img']['tmp_name'];
	$product_img_size=$_FILES['product_img']['size'];
	$product_img_type=$_FILES['product_img']['type'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$product_keyword=$_POST['product_keyword'];
	$status="on";

	if($product_title=="" or $product_category=="" or $product_img_name=="" or $product_price=="" or $product_desc=="" or $product_keyword=="")
		{	
		  echo "<script>alert('Please Fill the form Completely')</script>";
		  exit();
		}
	  
	
	else{
		$uploaded_images_dir="uploaded_images/";
		if(move_uploaded_file($product_img_tmp_name,"uploaded_images/".$product_img_name))
		{
	$add_product="INSERT INTO menus(`category_id`,`product_title`, `product_img`, `product_price`, `product_desc`, `product_keyword`, `status`) VALUES ('$product_category', '$product_title','$product_img_name','$product_price','$product_desc','$product_keyword','$status')";
	global $con;
	$run_add_product=mysqli_query($con,$add_product);

	if($run_add_product)
	{
	echo "<script>alert('Product Has Been Uploaded and Added')</script>";
			 	
	}
		}
		else
		{
			echo "<h1>what the fuck.....</h1>";
			
		}
	}
}
?>