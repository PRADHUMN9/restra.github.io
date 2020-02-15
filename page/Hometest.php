<html>
<head>
<meta charset="utf-8">
<title>Gallery</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" hr1ef="../bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="../bootstrap/css/hover.css"/>
<link rel="stylesheet" href="../bootstrap/css/nav.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/menufooter.css">

<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg"/>
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg"/>

</head>

<body>
<?php include("list.php");?>   

<div style="height: 50vh">
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
				 ?>	<div class="specific_set">
					<div class="col-md-5"><img class="img" src="uploaded_images/<?php echo $image_name; ?>" /></div>
					<div div class="col-md-6 pull-left"> <p class="title"><?php echo $product_title;?></p><br>
					<p class="desc"><?php echo $product_desc ?></p><br></a>
					  
					<p class="price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $product_price ?>/-</p></div>
					 </div>
					  <?php }
		  ?>
	   </table>
		  </div>
   </div>


<?php include("footer.php"); ?>
</body>
</html>