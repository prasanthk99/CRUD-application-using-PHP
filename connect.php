<?php
	$host = "localhost";
	$user = "root";
	$password = "Mysql@123";
	$database = "mydata";
	
	$conn = mysqli_connect($host,$user,$password);
	mysqli_select_db($conn,$database);
	
	
?>
