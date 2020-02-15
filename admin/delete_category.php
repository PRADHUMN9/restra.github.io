  <?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'restra');
$delete = $_GET['category_id'];

$q="DELETE FROM categories WHERE category_id='$delete'";
	$run=mysqli_query($con,$q);
  if($run=mysqli_query($con,$q))
  {
	 header("refresh:0.1; url=adminhome.php");
	  
  } 
else{
	echo "<h1>TRY AGAIN</h1>";
   }

 

?>