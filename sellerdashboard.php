<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harshi";
$conn = new mysqli($servername, $username, $password, $dbname);
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM  SELLERSIGNUP WHERE email='$email' and password='$password'";
$ans = $conn->query($sql);
if($ans->num_rows>0)
{
	$_SESSION['email']=$email;
	header('location:jsontojquery.php');
}

else{
	echo "failed";
}
$conn->close();

?>