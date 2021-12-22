<?php
	include "connect.php";
	
	$updateID= $_GET["updateid"];
	
	$sql = "SELECT * FROM CRUD WHERE id=$updateID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	
	if(isset($_POST['submit'])){
	
		$Name = $_POST["name"];
		$Empid = $_POST["Empid"];
		$Password = $_POST["password"];
		$Email = $_POST["Email"];
		
		$sql = "UPDATE `CRUD` SET Name='$Name',Empid=$Empid,Email='$Email',Password='$Password' WHERE id=$updateID";
		
		if(mysqli_query($conn,$sql)){
		 	header('Location:index.php');
		}
	
	}
	
?>

	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    <div class="container my-4">
    	<form class="mx-auto" method="post">
	  <div class="form-group">
	    <label for="Name">Name</label>
	    <input type="text" class="form-control" name="name" id="name" autocomplete="off" value=<?= $row['Name']?>>
	  </div>
	  <div class="form-group">
	    <label for="empid">EmpId</label>
	    <input type="number" class="form-control" name="Empid" id="empid" autocomplete="off" value=<?= $row['Empid']?>>
	  </div>
	   <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" name="Email" id="email" autocomplete="off" value=<?= $row['Email']?>>
	  </div>
	  <div class="form-group">
	    <label for="Password">Password</label>
	    <input type="password" class="form-control" name="password" id="Password" autocomplete="off" value=<?= $row['Password']?>>
	  </div>
	 
	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
    
    </div>


  </body>
</html>
