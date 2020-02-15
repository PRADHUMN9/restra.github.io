<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("db.php");
 ?>
<?php
$product_id=$_REQUEST['product_id'];

$sel="SELECT * FROM menus WHERE product_id='$product_id'";
$run=mysqli_query($con,$sel);

while($s=mysqli_fetch_array($run))
{
    $product_title= $s['product_title'];
    $product_price=
        $s['product_price'];
    $product_desc=$s['product_desc'];
}
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
<div id="section">
  <div id="message_bar">
    Add/ Insert Products
  </div>
	
   <div id="data_bar">
    
      <div id="right_data_bar">
		 <form  action=" " method="post"  enctype="multipart/form-data" style="padding: 50px; padding-left: 100px;">
		   <table width="95%" align="center" cellpadding="5" cellspacing="20">
			 <tr>
			   <td id="dec">Product Title</td>
			   <td><input type="text" name="product_title" value="<?php echo $product_title?>" id="insert_product_form_title"></td>			   
			 </tr>
			   
			 <tr>
			   <td id="dec">Product Price</td>
			   <td><input type="number" name="product_price" min="1" max="10000" value="<?php echo $product_price?>" id="insert_product_form_price"></td>			   
			 </tr>
			   
			  <tr>
			   <td id="dec">Product Description</td>
			   <td><input type="text" name="product_desc" value="<?php echo $product_desc?>" id="insert_product_form_desc"/></td>			   
			 </tr>
			   
			 <tr>
			   <td style="color: #000">&nbsp;</td>
			   <td><input type="submit" name="update_product" Value="Update" id="btn"></td>			   
			 </tr>
			  
			 
			 </table>
		  
		  </form>
      </div>
   </div>
</div>


</body>
</html>

<?php
  if(isset($_POST['update_product'])){
		  
	$product_title=$_POST['product_title']; 
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
		{	
            $upd="UPDATE menus SET product_title='$product_title',product_price='$product_price',product_desc='$product_desc' WHERE product_id='$product_id'";
             if(mysqli_query($con,$upd))
	header("refresh:0.1; url=show_product.php");
else
	echo "Not updated";
 
}
  }
?>