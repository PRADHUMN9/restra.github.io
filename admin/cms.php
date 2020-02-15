<html>
<head>

	<title>CMS</title>
</head>
<body>
	<center><h2>Cms: Categories</h2></center>
	
         <form id="add_categories" name="add_categories" method="post" action="">
           <table width="90%" border="0" align="center" cellpadding="20" cellspacing="20">
             <tr>
                <td align="center"><label for="category_name"></label>
                <input type="text" name="category_name" id="category_name" placeholder="Type Category Name" required="true"/></td>
             </tr>
			 <tr>
                <td align="center"><input type="submit" name="add_category_btn" value="Submit"></td>
			</tr>
           </table>
         </form><br>
	
	
		<center><h2>DML:Categories</h2></center><br>
		<table border="0" align="center" cellpadding="20" cellspacing="20">
	      <tr>
			<td>Category Id</td>
			  <td>Category Name</td>
			   <td>Delete</td>
			  <td>Update</td>
			</tr>
		<?php
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'restra');
	$sql="SELECT * FROM categories";
	$record=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($record)){
	?>  
			<tr>
			<td bgcolor="#632627" style=" color:#fff; text-align: center;"><?php echo $row['category_id']?></td>
			<td bgcolor="#682526" style=" color:#fff; text-align: center;"><?php echo $row['category_name']?></td>
			
			<td>
				<a href="delete_category.php?category_id=<?php echo $row['category_id'];?>">
					<input type="button" value="DELETE"/>
			    </a>
			</td>			
			
			<td>
				<a href="update_category.php?category_id=<?php echo $row['category_id'];?>">
					<input type="button" value="UPDATE"/>
				</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
</body>  
</html> 

<?php
global $con;
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'restra');

if(isset($_POST['add_category_btn'])){ 
	$cat=$_POST['category_name'];
	if($cat!="")
    {
	$q="INSERT INTO categories(category_name)VALUES('$cat')";
	if($run=mysqli_query($con, $q))
    {
      //header('Location:C:\xampp\htdocs\FinalProject\admin\adminhome.php');
        //header("refresh:0.1; url=../adminhome.php");
        header("location: ./cms.php");
    }
        
   // $page=$_SERVER['PHP_SELF'];
    //$sec ="1";
    //header("Refresh:$sec;url=$page");
}
}
else{
	
}

?>