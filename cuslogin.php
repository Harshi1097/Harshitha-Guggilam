<?php
session_start();
if(isset($_SESSION['buyeremail'])){
  header('location:buyerdashboard.php');
}
if(isset($_GET['logout'])){
  unset($_SESSION['buyeremail']);
  session_destroy();
  header('location:cuslogin.php');
}
?>
<html>
<head>
  <style type="text/css">
    body
    {
      background-image: url("images/fruit4.jpeg");
      background-position: center;
      background-size: cover;
    }
  </style>
  <title>customer Login</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/validation.js"></script>

</head>

<body><h3><a href="home.php">Go to Home</a></h3>
<h2><center>CUSTOMER LOGIN</center></h2>

  <form  id="myform" name="myForm" 
  action="custdashboard.php" method="post">
<div>
	<label  for="email"><b>Email</b></label>
      <input type="text" name="email" 
        id="email"  placeholder="Enter email" required>

         <label for="password"><b>Password</b></label>
      <input type="password" name="password"
        id="password" placeholder="Enter password" required>

       <center>
      <button type="submit" id="button1" class="btn" 
       value="button" ><b>Submit</b></button>

          &nbsp;&nbsp;&nbsp;

      <button type="reset" id="button2" class="btn"  
       value="button" ><b>
        Reset</b></button></center>
        </div>
        </form>
</body>
</html>
