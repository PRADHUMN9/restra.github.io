<?php include("db.php"); ?>

<?php 
 $product_id=$_REQUEST['product_id'];

$del="DELETE FROM menus WHERE product_id='$product_id'";
$run=mysqli_query($con,$del);
if($run=mysqli_query($con,$del))
{
    header("refresh:0.1; url=show_product.php");
}
else{
    echo "<h1>Try Again</h1>";
}
?>