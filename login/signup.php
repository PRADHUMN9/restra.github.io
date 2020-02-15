<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Singup</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="../bootstrap/css/hover.css"/>


<link rel="stylesheet" href="signup.css"/>


<script src="../bootstrap/js/bootstrap.js"></script>

<link rel="stylesheet" href="../bootstrap/font/fontawesome-webfont.svg"/>
<link rel="stylesheet" href="../bootstrap/font/glyphicons-halflings-regular.svg"/>

</head>

<body>
<form action="registration.php" method="post">
  <div class="container">
     <div class="loginbox pull-right">
     	<h1>Sign Up</h1>
        <input type="email" name="email" placeholder="Enter your Email" required/>
        <input type="text" name="uname" placeholder="Full Name" required/>
        <input type="password" name="password" placeholder="Your Password" required/>

        <input type="submit" name="submit" value="Sign Up" class="btn-success"/><br>
        <a href="Login.php">Login !!</a><br>
     </div>
  </div>
</form>
</body>
</html>