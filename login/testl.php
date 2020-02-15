 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOG IN</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="../bootstrap/css/hover.css"/>


<link rel="stylesheet" href="login.css"/>


<script src="../bootstrap/js/bootstrap.js"></script>

<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg"/>
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg"/>

</head>

<body>
  <div class="container">
   <form  method="post">
     <div class="loginbox pull-right">
     	<h1>Get Started</h1>
        <p>USERNAME*</p>
        <input type="text" name="uname" placeholder="User Name" required/>
        <p>Password*</p>
        <input type="password" name="password" placeholder="Your Password" required/>
        <input type="submit" name="submit" value="login" class="btn-success"/><br>
        <a href="#">Forgot Password</a><br>
        <a href="signup.php">Don't Have account?</a>
     </div>
   </form>  
  </div>
</body>
</html>
<?php

session_start();
$con = mysqli_connect('localhost','root','');
if($con)
{
	echo"<p>Connection Successful.</p>";}
else{
	echo"<p>Connection Error.</p>";
	}
mysqli_select_db($con,'login');
if(isset($_POST['submit']))
   {
	   
  $username=$_POST['uname'];
  $pass=$_POST['password'];

  
  $qa = "SELECT * FROM  admin WHERE uname='$username' && password='$pass'";
$resulta= mysqli_query($con, $qa);
$checka=mysqli_num_rows($resulta);

if($checka==1)
{
	$_SESSION['adminname']= $username;
	header('location:../admin/adminpanel.php');
	"<script>window.open('../admin/adminpanel.php','_self');</script>";
}
  

$q = "SELECT * FROM  signup WHERE uname='$username' && password='$pass'";
$result= mysqli_query($con, $q);
$check=mysqli_num_rows($result);

if($check==1)
{
	$_SESSION['username']= $username;
	header('location:../page/hometest.php');
	"<script>window.open('../page/hometest.php','_self');</script>";
}

  


else{
	
	echo "<script>alert('Sorry !! Cheak your User name and Password')</script>";
}

}
?>

	

