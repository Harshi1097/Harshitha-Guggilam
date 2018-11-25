<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .bg {
    /* The image used */
    background-image: url("images/bg2.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="font-family: segoe print;" class="navbar-brand" href="#">FRUITS CART</a>
    </div>
    <ul class="nav navbar-nav">
      <li style="font-family: segoe print" ><a href="home.php" ><span class="glyphicon glyphicon-home">Home</a></li>
        <li style="font-family: segoe print" class="active"><a href="feedback.html"><span class="glyphicon glyphicon-pencil"></span> Feedback</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
      <li style="font-family: segoe print" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Seller Login/Signup <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="sellerregistration.php">seller signup</a></li>
          <li><a href="selllogin.php">seller login</a></li>
          
        </ul>
      </li>
        <li style="font-family: segoe print" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Customer Login/signup<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="custregistration.php">customer signup</a></li>
          <li><a href="cuslogin.php">customer login</a></li>
          
        </ul>
      </li>
      
   </ul> 
   
  </div>
</nav>
<div class="bg">
  <br><br><br>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rms";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		$rating=$_POST["rating"];
		$feedback=$_POST["textarea"];
		$sql="INSERT INTO feedback (rating,feedback) VALUES ('$rating','$feedback')";
			if ($conn->query($sql) === TRUE) 
			{
		    	echo "Thank you for your valuable feedback";
			} 
			else
			{
		    	echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
?>
</div>
</body>
</html>