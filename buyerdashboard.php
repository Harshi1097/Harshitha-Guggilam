<?php
session_start();
if(isset($_SESSION['buyeremail']))
{
	header('location:buyerdashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="buyerdash.css">
  	<style type="text/css">
  		body
  		{
  			background-image: url("images/mix.jpeg");
  			background-position: center;
      	background-size: cover;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li
  		{
  			margin-top: 2%;
  			width: 100%;
    	height: 100px;
    	border: 1px solid black;
    	background-color:  #ffe6cc;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>span
  		{
  			margin-left: 5%;

  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>button
  		{
  			float: right;
  			background-color: #66b3ff;
  		}
  		

  	</style>
  	
  <script type="text/javascript">
  			var buyer_email=$("#buyeremail").text().trim();
		var sellers="";
		var sellerset="";
		var fruitlist="";
		var thead="";
		var colrow="";
		var sellerFruits="";
  		$(document).ready(function(){
  			
			sellersData();
		    $(document).on("click","#shop",function(){
		    	console.log($(this).attr("name"));
		    	 $("ul").remove();
		    	 $.post("get_fruit_information.php",
				    {"email":sellers[$(this).attr("name")].semail},
				    function(data,status){
				    	console.log(data);
				    	sellerFruits=JSON.parse(data);
				    	createTable(sellerFruits);
				    }
		    	);

		    });
  		});
  		function sellersData()
  		{
  			$("table").remove();
  			$("ul").remove();

  			$.post("get_sellers_information.php",
				    {"email":""},
				    function(data,status){
				    	console.log(data);
				    	sellers=JSON.parse(data);
				    	getInfo(sellers);
				    }
		    );
  		}
  		function getInfo(sellers)
  		{
  			sellerset = $("<ul class='list-group'/>");
  			$("#result").append(sellerset);
  			for(var i=0;i<sellers.length;i++)
  			{
  				getSellersData(sellers[i],i);
  			}
  		}
  		function getSellersData(seller,index)
  		{
  			sellerset.append($("<li class='list-group-item'>Name:"+seller.sname+"<br>Email ID:"+seller.semail+"<br>Shop name:"+seller.shopname+"<button class='btn btn-default' type='button' id='shop' name='"+index+"'>View Items</button></li>"));
  		}
  		function createTable(fruits){
			fruitlist= $("<table class='table table-striped'/>");
			thead=$("<thead/>");
			colrow=$("<tr>");
			thead.append(colrow);
			colrow.append("<td>FruitName</td>");
			colrow.append("<td>Quantity</td>");
			colrow.append("<td>Price</td>");
			fruitlist.append(thead);
			$("#result").append(fruitlist);
			for (var i = 0; i < fruits.length; i++) {
        			fruitInfo(fruits[i],i);
    		}
		}
		function fruitInfo(fruit,index)
		{
			    
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				fruitlist.append(tbody);
			    tbody.append(row); 
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    
		}  

 
  </script>
</head>
<body>
<h4 id="buyeremail">
		<?php
		/*echo $_SESSION['buyeremail'];*/
		echo "Welcome,user";
		?></h4>
	<a href="cuslogin.php?logout='1'">CLICK HERE TO LOGOUT</a>

	<div class="container result_container">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" onclick="sellersData()">Sellers List</button>
				<div class="result" id="result">
						
				</div>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
</body>
</html>