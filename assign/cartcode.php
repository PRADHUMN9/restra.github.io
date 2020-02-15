<?php
session_start();

require("../admin/db.php");
$product_id=$_REQUEST['product_id'];
$product_price=$_REQUEST['product_price'];

if(!isset($_SESSION["username"]))
{
	echo "
	<script>
		alert('Login Required');
		window.location.href='../login/login.php'
	</script>
	";
}

echo $username=$_SESSION['username'];
// echo $email;


$ins="INSERT INTO cart(product_id, quantity,product_price,username, status) VALUES('$product_id','1','$product_price','$username','true')";

if($res=mysqli_query($con,$ins))
{
	//echo "add to cart";
	//header("location:../cart.php");
	echo "<script>
		alert('Added to Cart');
		window.location.href='../page/orderonline.php';
	</script>";
}
else
{
	echo "<script>
			alert('Error in Code');
			//window.location.href='../index.php';
		</script>";
}



?>