<?php error_reporting(E_ALL ^ E_NOTICE); ?> 
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'restra');
$update = $_GET['category_id'];

$sel="SELECT * FROM categories WHERE category_id='$update'";
$run = mysqli_query($con,$sel);

while($s=mysqli_fetch_array($run))
 {
	$name=$s['category_name'];
	
    } 
?>
<form action="" method="post">
<table>
	<center><h1>Update Category</h1></center>
	<tr>
		<td>
			<input type="text" name="category_name" value="<?php echo $name; ?>">
		
		</td>
		<td>
			<input type="submit" name="update_cat" value="Update"/>
		</td>
	
	</tr>
</table>
</form>
<?php

if(isset($_POST['update_cat']))
{
  $h=$_POST['category_name'];
	$sql="UPDATE categories SET category_name='$h' WHERE category_id='$update'";
   if(mysqli_query($con,$sql))
	header("refresh:0.1; url=adminhome.php");
else
	echo "Not updated";
 
}
?>