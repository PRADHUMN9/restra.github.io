<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("../admin/db.php");
 ?>

<!doctype html>
<html>
<head>
	<style>
		.set{
			list-style: none;
			
			
		}
		
		.set li{
			float: left;
			margin:40px;
			height: 60px;
			width: 300px;
			text-align: center;
			background: #CACACA;
			
		}
		.set li a{
			text-decoration: none;
			font-size: 20px;
			padding: 10 auto;
		}
		
		.id_category{
			
			
		}
	
	</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('list.php');
	?>
	
	<div class="container-fluid" style="margin-top: 150px;">
	<?php
		   global $con;
           $get_categories= "select * from categories";
		   $run_get_categories=mysqli_query($con, $get_categories);
		   while($row_run_get_categories=mysqli_fetch_array($run_get_categories))
		   {
			   $category_id=$row_run_get_categories["category_id"];
			   $category_name=$row_run_get_categories["category_name"];
			   ?>
	<div class="set">
	<div class="id_category">	
		<?php
		    echo "<li><a href='../admin/category_vise_display.php?category_id=$category_id'>$category_name</a></li>";
		   }
		?>
			   </div>		   
			  
		 
	
		</div>
	</div>
</body>
</html>