<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "harshi";
		$data=array();
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM sellersignup";
		$ans = $conn->query($sql);

		if ($ans->num_rows > 0) {
		    // output data of each row
		    while($row = $ans->fetch_assoc()) {
		        array_push($data,array('sname'=>$row["firstname"],'semail'=>$row["email"],'shopname'=>$row["lastname"]));
		    }
		} else {
		    echo "NO results";
		}
		$conn->close();
		echo json_encode($data);
?>
