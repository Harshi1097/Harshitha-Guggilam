<?php
session_start();
if(isset($_SESSION['email']))
{
  header('location:jsontojquery.php');
}
if(isset($_GET['logout']))
{
  unset($_SESSION['email']);
  session_destroy();
  header('location:home.php');
}
if(isset($_SESSION['email']))
{
  header('location:buyerdashboard.php');
}
if(isset($_GET['logout']))
{
  unset($_SESSION['email']);
  session_destroy();
  header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="font-family: segoe print;" class="navbar-brand" href="#">FRUITS CART</a>
    </div>
    <ul class="nav navbar-nav">
      <li style="font-family: segoe print" class="active"><a href="#" ><span class="glyphicon glyphicon-home">Home</a></li>
        <li style="font-family: segoe print"><a href="feedback.html"><span class="glyphicon glyphicon-pencil"></span> Feedback</a></li>
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
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="images/fruit2.jpeg" style="width:100%;">
        <div class="carousel-caption">
        <h3></h3>
        <b><p style="color:black;font-size: 20px;">The best website deals with fruit sales from different sellers of high quality</style></p></b>
      </div>
      </div>

      <div class="item">
        <img src="images/fruits1.jpeg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/newfruit.jpeg" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
