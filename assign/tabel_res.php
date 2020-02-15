<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rythem Resevation Table</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="../bootstrap/css/hover.css"/>
<link rel="stylesheet" href="../bootstrap/css/nav.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Dosis|Nanum+Gothic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<link rel="stylesheet" href="reserve_table.css"/>

<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg"/>
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg"/>

</head>
	
    
<body>
<div class="table">
<div class="container-fluid" style="background:url(../img/g12.jpeg); opacity:0.5; background-position:center;">
  <hr><h2 class="intro-text text-center" style="color:#000; weight:800;">OpenTable</h2><hr>
  <hr><h3 class="intro-text text-center" style="margin-top:-25px; color:#000;">RythemRestra</h3><hr>
<a href="../index.php" style="background:#0964; color:orange; font-size:15px; padding:5px; font-weight:1000; margin-top:20px;">Back TO main Page</a>
</div>
</div>

<form action="" method="post">
<div class="reserve">
<div class="container-fluid">
<div class="col-md-8" style="border-right:2px solid black; margin-top:60px;">
<fieldset><strong style="font-size:20px;">Make Reservation</strong></fieldset>
 <div class="row" style="padding:20px 40px;">
   <div class="col-md-3">
     <div class="borderMethod">
     <select name="people">
       <option>&lt;&nbsp; Select &nbsp; &gt;</option>
       <option value="1">1 People </option>
       <option value="2">2 People </option>
       <option value="3">3 People </option>
       <option value="4">4 People </option>
       <option value="5">5 People </option>
       <option value="6">6 People </option>
       <option value="7">7 People </option>
       <option value="8">8 People </option>
       <option value="9">9 People </option>
       <option value="10">10 People </option>
     </select>
	</div>
   </div>
   <div class="col-md-3 date">
       <input type="date" name="date" style=""/>
   </div>
   <div class="col-md-3 time">
     <select name="time">
       <option>&lt;&nbsp; TIME &nbsp; &gt;</option>
       <option value="23">11:00 PM</option>
       
       <option value="13">01:00 PM </option>
       <option value="14">02:00 PM </option>
       <option value="15">03:00 PM </option>
       <option value="4">04:00 AM </option>
       <option value="5">05:00 AM </option>
       <option value="6">06:00 AM</option>
       <option value="7">07:00 AM </option>
       <option value="8">08:00 AM </option>
	   <option value="9">09:00 AM </option>
       <option value="10">10:00 AM </option>
       <option value="11">11:00 AM </option>              
     </select>
    </div>   
    <div class="col-md-2 go">
        <input type="submit" name="submit" value="GO" class="btn btn-danger" style=""/>           
    </div>   
   </div>
<p class="text-center" style="font-size:20px;">Rythem Restra has partnered with OpenTable to provide free, secure<br/> and instantly confirmed online reservations.</p>

</div>
<div class="col-md-4">
	<div id="feed" style="margin-top:60px;">
        <fieldset><strong style="font-size:20px;">Feedback</strong></fieldset>
		<p><a href="#" class="emoji"><i class="em em-angry"></i></a><a class="emoji"><i class="em em-frowning"></i></a><a class="emoji"><i class="em em-grinning"></i></a><a class="emoji"><i class="em em-grinning_face_with_star_eyes"></i></a><a class="emoji"><i class="em em-heart_eyes"></i></a></p>
        <table>
        <tr>
            <td style="font-size:20px;">Full Name:</td><th><input type="text" name="fname" placeholder="Full Name" style="margin-left:20px; width:100%;"/></th>
        </tr>
         <tr>
            <td style="font-size:20px;">Gmail:</td><th><input type="text" name="email" placeholder="Gmail Address" style="margin-left:20px; width:100%;"/></th>
        </tr>
        <tr>
            <td style="font-size:20px;">Review:</td><th><textarea name="review" style="margin-left:20px;  width:100%;"></textarea></th>
        </tr>
        <tr>
        <th><input type="submit" name="feed" value="Submit" class="pull-right" style="margin-left:20px; margin-top:10px;"/></th>
        </tr>
        </table>
	</div>
    
    
</div>
</div>
</div>
</form>

<div class="panel-footer navbar-fixed-bottom">
 <div class="col-md-3">
 
 </div>
</div>
</body>
</html>


<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'restra');


if(isset($_POST['submit']))
{
    
    $people=$_POST['people'];
      $date=$_POST['date'];
      $time=$_POST['time'];

	$q= "INSERT INTO table_res(people,date,time) VALUES ('$people','$date','$time')";
	$query= mysqli_query($con,$q);
if($query){
	echo ("<script>
		alert('Resereved  Your Table!!');
		</script>");
	}
else{
	echo ("<script>
		alert('Sorryyyy!!!!');
	</script>");
	}
	
}

	

////

if(isset($_POST['feed']))
{
    
    $fname=$_POST['fname'];
      $email=$_POST['email'];
      $review=$_POST['review'];

	$q= "INSERT INTO feedback(name,email,review) VALUES ('$fname','$email','$review')";
	$query= mysqli_query($con,$q);
if($query){
	echo ("<script>
		alert('Saved   !!');
		</script>");
	}
else{
	echo ("<script>
		alert('Sorryyyy!!!!');
	</script>");
	}
	
}




?>