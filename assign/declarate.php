<?php 
include("../admin/db.php");

 $cart_id=$_REQUEST['cart_id'];

		$del="delete from cart where cart_id='$cart_id'";
	$res=mysqli_query($con,$del)or die("query error2");
	if($res==true)
	{
		echo"data delete";
		header("location:../page/cart.php");
	}else{
		echo"data not datele";
		header("location:../page/cart.php");  
	}

	
?>