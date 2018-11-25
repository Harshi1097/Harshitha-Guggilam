<?php
session_start();
if(isset($_SESSION['email'])){
  header('location:jsontojquery.php');
}
if(isset($_GET['logout'])){
  unset($_SESSION['email']);
  session_destroy();
  header('location:selllogin.php');
}
?>
<html>
<head>
  <style type="text/css">
    body
    {
      background-image: url("images/apple.jpeg");
      background-position: center;
      background-size: cover;
    }
  </style>
  <title>Seller Login</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/validation.js"></script>

</head>

<body><h1><a href="home.php">Go to Home</a></h1>
<h2><center>SELLER LOGIN</center></h2>

  <form  id="myform" name="myForm" 
  action="sellerdashboard.php" method="post">
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
