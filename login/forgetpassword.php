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
     <div class="loginbox pull-right"  style="height:500px;">
     	<h1>Get Started</h1>
        <p>USERNAME*</p>
        <input type="text" name="uname" placeholder="User Name" required/>
        <p>Email*</p>
        <input type="text" name="email" placeholder="Your Email" required/>
        <p>Password*</p>
        <input type="text" name="pass" placeholder="Password" required/>
        <p>Confirm Password*</p>
        <input type="text" name="cpass" placeholder="Confirm Password" required/>
        <input type="submit" name="Change" value="Change" class="btn-success"/><br>
        <a href="login.php">Login</a><br>
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
mysqli_select_db($con,'restra');
if(isset($_POST['Change']))
   {
	   
   $username=$_POST['uname'];
   $email=$_POST['email'];
   $pass=$_POST['pass'];
   $cpass=$_POST['cpass'];

  if($pass==$cpass)
  {
	  
$sql="update signup set password='$pass' where email='$email'";
$r=mysqli_query($con,$sql);
if($r)
echo "Record Updated";
else
echo "sorry"; 
  }


else{
	
	echo "<script>alert('Sorry !! Cheak your User Name and Email')</script>";
    }

   }
?>

	

