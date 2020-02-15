<html>
<head>
<meta charset="utf-8">
<title>Order Online</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" hr1ef="../bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="../bootstrap/css/hover.css"/>
<link rel="stylesheet" href="../bootstrap/css/nav.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/menufooter.css">

<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg"/>
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg"/>

<title>Nav</title>

</head>

<body>
<?php include("list.php");?>   
<div class="orderonline">
<div class="container-fluid" style="margin-top:20px; margin-left:20px;">
<div class="col-md-4 cont"><a text-align:center; href="category.php"><strong>Show Item In category Vise</strong></a></div>
<div class="col-md-4"><a style="font-size:22px; font-weight:700;" href="cart.php">Cart</a><div>
</div>	
</div>
</div>
<div class="container">
	<?php
		include("../admin/display_all_menus.php");
		?>
</div>
</div>
<?php include("footer.php"); ?>

</body>
</html>