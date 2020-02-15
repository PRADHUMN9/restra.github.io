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

<link rel="stylesheet" href="adminpanel.css">


<title>Admin Panel</title>

</head>

<body>
<div id="header" class="pull-center">
  <ul id="navbar">
     <li style="background:none;"> <a href="#">Home</a></li>
     <li style="background:none;"> <a href="#">About</a></li>
     <li style="background:none;"> <a href="contact_us.php">Contact Us</a></li>
     <li style="background:none;"> <a href="#">cjkljk</a></li>
     <li style="background:none;"> <a href="#">jliaioj</a></li> 
           
  </ul>
</div>

<div id="section">
	<div id="message_bar">
    Customer Contact Details
  </div>
	
   <div id="data_bar">
	   <?php include("contact_us_details.php");?>
	</div>
	</div>
  
</body>
</html>