<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harshi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$address=$_POST['address'];
$pan=$_POST['pan'];
$phnumber=$_POST['phnumber'];
$password=$_POST['password'];


$sql="INSERT INTO CUSTSIGNUP VALUES('$firstname','$lastname','$email','$address','$pan',$phnumber,'$password')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['buyeremail']=$email;
    /*echo 'Hi, ' . $_SESSION["email"];*/
    header('location:buyerdashboard.php');
    } else {
    echo "Error creating table: " . $conn->error;
}

?>