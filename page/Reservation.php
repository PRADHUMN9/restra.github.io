<html>
<head>
<meta charset="utf-8">
<title>Reservation.</title>
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


</head>

<body>
<?php include("list.php");?>   


<div class="reservationtable">
  <div class="container">
   	<div>
   		<hr style=" border:none;"><h2 class="intro-text text-center" style="color:#fff;">RESERVATION</h2><hr>
 	</div>
	<div class="jumbotron">
      <p>POWERED BY OPENTABLE</p>
      <a href="../assign/tabel_res.php"><input type="submit" value="FIND A TABLE" class="btn btn-danger"/></a>
    </div>
 <div id="f" style="width:300px; height:200px;">
<button onclick="hide()" style="float:right;">close</button>
 <tr>
  <td>Date:</td>
  <td><input type="date" class="" name="date"/></br> 
  <td>Time:</td>
  <td><input type="datetime" name="time"/> 

</tr>



</div>
	
</div>
     <div class="media">
       <div class="panel-heading">PLEASE NOTE</div>
       <div class="panel-body">
       	 <p>For reservations of 1-6 people, we invite you to use the Open Table link above or call us at 646-895-9884. All reservations will be held for 15 minutes after the reserved time. After 15 minutes, we can no longer guarantee your reservation but will do our best to accommodate your party.</p>
         <p>The full menu is served in the dining room and the bar until 10 pm Sunday through Wednesday and until 11 pm Thursday through Saturday. </p>
         <p>For reservations for parties of 7 or more, please contact us via telephone 646-895-9884 or email us at info@theeddynyc.com to inquire about availability. We request that parties of 7 or more participate in our tasting menu.</p>
         <p>For all other inquiries, please telephone or e-mail us. We will do our best to return your message within 24 hours. We look forward to seeing you at The Eddy! </p>
       </div>
       <div class="panel-heading">PRIVATE DINNING	</div>
       <div class="panel-body">
       	 <p>The Eddy is available to reserve as a private dining space for up to 32 people. Our space is filled with rich wood and vintage finishes throughout, exposed brick walls and a bar area. For cocktail parties, we can accommodate up to 50 people. Please contact us for pricing and additional information at info@theeddynyc.com.</p>
       </div>
    </div>
    
  </div>
</div><!--end of reservationtable-->






<?php include("footer.php"); ?>

</body>
</html>