<?php
session_start();
if(!isset($_SESSION['username']))
	 {
		header("location:../login/Login.php?msg=loginfirst");
	 }
?>

<html>
<head>
<?php
include("../admin/db.php");
?>
</head>
<body>

<div class="jumbotron" style="margin-top:20px;">
<div class="container">
 <div class="row">
 <div class="col-sm-12">
 <div class="row">
 <div class="col-sm-1"></div>
  <div class="col-sm-10 table-responsive">
   <table class="table table-bordered">
     <tr>
	  <th>Sr. No</th>
	  <th>Image</th>
	  <th>Name</th>
	  <th>Price</th>
	  <th>Action</th>
	 </tr>

<?php
 $username=$_SESSION['username'];
 //echo $email."<br/>";
 $sel="select * from cart where username='$username'";
       //echo "$username";
 $res=mysqli_query($con,$sel);
       /*if($res){
           echo "pathak";
       }
       else
           
       {
           echo "chubbay";
       }*/
 $sr=1;
 $totalcount=0;
while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
   {
	  $product_id=$row[1];
    //echo "\n$product_id\n";
	$sel1="select * from menus where product_id='$product_id'";
	$res1=mysqli_query($con,$sel1);
   while( $row1=mysqli_fetch_array($res1,MYSQLI_BOTH))
	{
		$totalcount=$totalcount+$row1['product_price'];
 ?>
	 	 <tr>	
	   <td><?php  echo $sr;?></td>
	  <td><img src="../admin/uploaded_images/<?php  echo $row1[4]; ?>" height="80px" /></td>
	  <td><?php  echo $row1[3]; ?></td>
	  <td><?php  echo $row1[5]; ?></td>
	  <td>
	  <a href="../assign/declarate.php?cart_id=<?php echo $row['0'];?>"  role="button" class="btn btn-danger btn-sm">Remove</a>
	  </td>
	  </tr>
<?php
	   $sr++;
	}
  
	}
	
   ?>
    </table>   
  </div>
  <div class="col-sm-1"></div>
 </div>
</div>
</div> 
<div class="row">
			    <div class="col-sm-4"></div>
			    <div class="col-sm-4"></div>
			    <div class="col-sm-4">
				  <h2>Total</h2>
				  <h2><?php  echo $totalcount; ?></h2>
				  <a href="orders.php?totle=<?php echo  $totalcount; ?>" class="btn btn-primary" role="button">Chack now</a>
				  </div>
			  </div>
</div>
</div>
</body>
</html>