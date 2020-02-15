<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>



<!doctype html>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("db.php");
 ?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1">

<style>

</style>

<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="adminpanel.css">


<title>Admin Panel</title>

</head>

<body>


<div id="section">
  <div id="message_bar">
    Welcome to admin page of Rythem Restr
  </div>
	
       <div id="data_bar">
		 <?php 
  			include("cms.php");
 		 ?>
      </div>
   </div>



</body>
</html>