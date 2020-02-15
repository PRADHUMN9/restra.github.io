<html>
<head>
<script src="/../css/bootstrap.min.js"></script>
</head>
<body></body>
</html>

<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'restra');

$email=$_POST['email'];
$username=$_POST['uname'];
$pass=$_POST['password'];

$q = "SELECT uname FROM signup WHERE email='$email'";

$result= mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num>0){
	echo ("<script>
		alert('Email already Registered! Enter a valid email');
		window.location.assign('login.php','_self');</script>");
	}
else{
	$qi ="INSERT INTO signup(uname, email, password) VALUES ('$username','$email','$pass')";
	mysqli_query($con, $qi);
	echo ("<script>
		alert('You Registered successfully');
		window.location.assign('login.php');</script>");
	}
?>