<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('location:home.php');
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
	
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="js/jsontojquery.js"></script>
	<link rel="stylesheet" href="css/jsonto.css">
	<style>
		body
	{
		background-image: url("images/fruit4.jpeg");
		background-position: center;
      	background-size: cover;
	}
	</style>
  
</head>
<body>
	<h4 id="useremailid"><?php echo $_SESSION['email']?> </h4>
	<h5><a href="selllogin.php?logout='1'"><u>Click Here To Logout</u></a></h5>
<!--Modal add-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:  #ff8533;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Add New fruit </h4>
        </div>
        <div class="modal-body">
           <form >
					<div class="form-group">
  						<label> FruitName:</label>
  						<input type="text" class="form-control" id="fruit_name">
					</div>
					<div class="form-group">
  						<label>Quantity:</label>
  						<input type="text" class="form-control" id="quantity">
					</div>
					<div class="form-group">
  						<label>Price:</label>
  						<input type="text" class="form-control" id="price">
					</div>
					<button type="button" id="btn_add" class="btn btn-default" data-dismiss="modal">Add</button>
					&nbsp;
					
			</form>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
<!--Update modal-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background-color:#ff8533;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="update_fruit"></h4>
        </div>
        <div class="modal-body">
           <form>
           		<div class="form-group">
           			<label>Quantity</label>
           			<input type="number" id="update_quantity" class="form-control">           			
           		</div>
           		<div class="form-group">
           			<label>Price</label>
           			<input type="number" id="update_price" class="form-control">           			
           		</div>
           		<button id="update_btn" type="button" class="btn btn-default" data-dismiss="modal">Update</button>
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
  <div class="container fruit_information" style="">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Insert</button>

				<table class="table table-striped" id="tableone">
					<thead style="color:white;background-color:#4286f4;">
						<tr>
							<th>Fruit</th>
							<th>Quantity</th>
							<th>Price/Unit</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>					
				</table>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
</body>
</html>