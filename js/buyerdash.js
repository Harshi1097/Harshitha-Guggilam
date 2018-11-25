
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
