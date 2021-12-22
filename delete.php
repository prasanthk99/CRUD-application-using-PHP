<?php
	include "connect.php";
	
	$deleteid = $_GET['deleteid'];
	
	$sql = "DELETE FROM `CRUD` WHERE id=$deleteid";
	
	$result = Mysqli_query($conn,$sql);
	
	$res = "SET @num:=0;";
	$res .= "UPDATE CRUD SET id=@num:=@num+1;";
	$res .= "ALTER TABLE CRUD AUTO_INCREMENT=1";
	Mysqli_multi_query($conn,$res);
	
	if($result){
		Mysqli_query($conn,$sql);
		header("Location:index.php");
	}
?>
