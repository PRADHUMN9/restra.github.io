<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>

<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css"/>
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

<div class="contactus">
 <div>
   <hr><h2 class="intro-text text-center">CONTACT <strong>Business Casual</strong></h2><hr>
 </div>
  <div class="row">
    <div class="col-md-6">
      <div class="jumbotron">
        <div class="details">
             <h3>342 E. 6TH STREET</h3>
                 <p>New York, NY<br>
                     10003<br>
                  646-895-9884<br>
            <a href="#">info@theeddynyc.com</a></p>
            
                    <h4>KITCHEN HOURS</h4>
                <p>Sunday-Wednesday: 5:30pm-10pm<br>
                Thursday-Saturday: 5:30pm-11pm</p>
            
                <h4>BAR HOURS</h4>
                <p>Sunday-Wednesday: 5:30pm-12am<br>
                    Thursday-Saturday: 5:30pm-1am</p>
                
                <h2>MEDIA INQUIRIES</h2>
                <a href="#">jasonsoloway@gmail.com</a>
        </div>
      </div>
    </div><!-- end of col-->

    <div class="col-md-6">
      <div class="jumbotron" style="padding:20px 0px;">
       <div class="contitem pull-right">
		 <form method="post" action="">
          <p>Name*</p>
          <input type="text" name="ame" placeholder="Enter Your Name"/>
            <p>Email Address*</p>
            <input type="email" name="email" placeholder="Enter Your Email"/>
            <p>Contact Number*</p>
          <input type="text" name="contact" placeholder="Contact Number"/>
            <p>Subject*</p>
            <input type="message" name="sub" placeholder="Message" style="height:40px;"/>
            <p>Message*</p>
            <input type="message" name="message" placeholder=""/></br>
            <input type="submit" name="submit" class="btn btn-success"/>
             </form>          
         </div><!--end of jumbotron-->
      </div>
    </div><!-- end of col-->
    </div><!--end of row-->
</div><!--end of contactus-->


<div><?php include("footer.php"); ?></div>

</body>
</html>




<?php
$con= mysqli_connect('localhost', 'root','');
mysqli_select_db($con,'restra');


if(isset($_POST['submit'])){
	
$name= $_POST['ame'];
$email=$_POST['email'];
$cont= $_POST['contact'];
$sub=$_POST['sub'];
$msg=$_POST['message'];

	$q = "INSERT INTO contact_us(name, email, contact, sub, message) VALUES('$name', '$email','$cont','$sub','$msg')";
	$result=mysqli_query($con,$q);
	if($result)
	{echo"<script>alert('successfull');</script>";}
	else{
		"failed";
	}
}


?>