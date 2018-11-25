<?php
session_start();
if(isset($_SESSION['email'])){
  header('location:buyerdashboard.php');
}
if(isset($_GET['logout'])){
  unset($_SESSION['email']);
  session_destroy();
  header('location:cuslogin.php');
}
?>

<html>
<head>
  <style type="text/css">
    body
    {
      background-image: url("images/mango.jpg");
      background-position: center;
      background-size: cover;
    }
  </style>
  <title>Customer Registration</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/validation.js"></script>
</head>

<body>
<h1><a href="home.php">Go to Home</a></h1>
<h2 style="color:pink;"><center>CUSTOMER REGISTRATION</center></h2>

  <form  id="myform" name="myForm" 
  action="custsignup.php" method="post">

 <div>

    <label for="firstname"><b>First Name</b></label>
      <input type="text" name="firstname" 
        id="firstname" placeholder="Enter first name" 
        onkeyup="validation('firstname')">
         <p id="error_firstname" class="error">Required</p>

    <label for="lastname"><b>Last Name</b> </label>
      <input type="text" name="lastname" 
        id="lastname" placeholder="Enter last name" 
         onkeyup="validation('lastname')">
         <p id="error_lastname" class="error">Required</p>

    <label  for="email"><b>Email</b></label>
      <input type="text" name="email" 
        id="email"  placeholder="Enter email"
         onkeyup="validation('useremail')">
         <p id="error_email" class="error">Invalid Email</p>
          
        
    <label for="address"><b>Address</b></label>
      <input type="text" name="address" 
        id="address" placeholder="Enter address" 
         onkeyup="validation('address')">
         <p id="error_address" class="error">Required</p>
          
        
    <label for="pan"><b>PAN Number</b></label>
      <input type="text" name="pan" 
        id="pan" placeholder="Enter PAN number" 
         onkeyup="validation('pan')">
         <p id="error_pan" class="error">Invalid PAN number<br>(5letters followed by 4 digits and a letter)</b> </p>
          
    <label for="phnumber"><b>Phone number</b></label>
      <input type="text" name="phnumber" 
        id="phnumber" placeholder="Enter Phonenumber" onkeyup="validation('phnumber')">
         <p id="error_phnumber" class="error">Invalid Phone number</p>
          
    <label for="password"><b>Password</b></label>
      <input type="password" name="password"
        id="password" placeholder="Enter password" 
         onkeyup="validation('password')">
       <p id="error_password" class="error">Invalid password<br>Password must be between 4 and 12 characters long and include at least one number</p>
          
      <label for="confirm_password"><b>Confirm password</b></label>
      <input type="password" name="confirm_password"  id="confirm_password" placeholder="Re-enter password" onkeyup="validation('confirm_password')" onfocus="check()">
            <p id="error_confirmpassword" class="error">Both passwords didn't match</p>    
          
    <center>
      <button type="submit" id="button1" class="btn" 
       value="button"  
        disabled="true"><b>Submit</b></button>

          &nbsp;&nbsp;&nbsp;

      <button type="reset" id="button2" class="btn"  
       value="button"><b>
        Reset</b></button></center>
        </div>
        </form>
</body>
</html>