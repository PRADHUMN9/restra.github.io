 <?php
          session_start();
          if(!isset($_SESSION['username']))
		  {
			  header("location : ../login/login.php");
			  "<script>window.open('../index.php','_self');</script>";
		  }
		  ?>
 <head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="../bootstrap/css/hover.css"/>
<link rel="stylesheet" href="../bootstrap/css/nav.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="../css/mystyle.css">

<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg"/>
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg"/>

<title>adminpanel</title>

</head>

<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
  include("db.php");
 ?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="adminpanel.css">


<title>Admin Panel</title>

</head>

<body>

<h3>Welcome To admin page of Rytem Restra <strong><?php echo $_SESSION['username'];?></strong></h3>
<a href="insert_product.php">Insert Product</a><br>

<a href="delete_product.php">Delete/Update Product</a><br>
<a href="contact_us_details.php">Show Customer Details who contact</a><br>
<a href="adminhome.php">Insert Category</a><br>

<a href="../login/logout.php" class="btn btn-danger">LOGOUT</a>



</body>
</html>