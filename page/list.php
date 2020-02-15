<body></body>
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="../bootstrap/css/hover.css"/>
<link rel="stylesheet" href="../bootstrap/css/nav.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="../css/orderonline.css">
<link rel="stylesheet" href="../css/style26.css">


<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg"/>
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg"/>
</head>
<body>
<nav class="navbar-fixed-top">
<div class="container-fluid main">
  <div class="col-md-2 pull-right link">
   
	 <?php
          session_start();
          if(!isset($_SESSION['username']))
		  {?>
			 <div class="container-fluid btn btn-danger" ><a href="../login/Login.php">Login/SignUp</a></div>
         
            <?php }
			else
			{?>
				<div class=" admin  pull-right" style="margin-top:10px;font-weight:600; margin-right:150px;">
	   Welcome <?php echo $_SESSION['username'];?>
	    <form action="" method="post">
          <input style="margin-left:150px; margin-top:-20px;" type="submit" value="Logout" name="Logout" class="btn"/>
	    </form></div><?php
			}
			
          ?>

   
      
		<?php
		   if(isset($_POST['Logout']))
		   {
			   header('location:../login/logout.php');
		   }
		
		?>
	
  </div> 
<div class="col-md-2 logo">
			<a href="#"><img src="../img/logoF.jpeg" width="170px" height:"200px"></a>
   		</div>
 <ul>
      <li><a href="home.php"><span data-text="Home">Home</span></a></li>
      <li><a href="about.php"><span data-text="ABOUT">ABOUT</span></a></li>
      <li><a href="reservation.php"><span data-text="RESERVATION">Reservation</span></a></li>
      <li><a href="orderonline.php"><span data-text="ORDERS">Orders</span></a></li>
     <li><a href="menus.php"><span data-text="MENU">Menu</span></a></li>
      <li><a href="Gallery.php"><span data-text="GALLERY">Gallery</span></a></li>
     <li><a href="contact.php"><span data-text="Contact">Contact</span></a></li>
    </ul>
</div>
</nav>
</body>