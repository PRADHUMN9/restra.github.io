
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

$username= (isset($_POST['uname']));
$pass=(isset($_POST['password']));
if(isset($_POST['submit'])){
	$q = "SELECT uname from signup WHERE uname='$username'";
	$result= mysqli_query($con, $q);
	
if(mysqli_num_rows($result)>0){
	$_SESSION['uname'] =$username;
	header("Location:adminhome.php");
	}
else{
	echo ("<script>
		alert('Username Invalid');
</script>");
	}
}
?>