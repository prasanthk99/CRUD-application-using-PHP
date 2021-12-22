<?php
	include "connect.php";
	
	$Name = $_POST["name"];
	$Empid = $_POST["Empid"];
	$Password = $_POST["password"];
	$Email = $_POST["Email"];
	
	if(isset($_POST['submit'])){
	
		if(!$conn){
				die(mysqli_connect_error());
		}
		
		if($Name && $Empid && $Password && $Email){
			
			$query = "INSERT INTO CRUD(Name,Empid,Email,Password,Reg_date) VALUES('$Name',$Empid,'$Email','$Password',current_timestamp())";	
			
			if(mysqli_query($conn,$query)){
				
				header("Location:index.php");
			}
		}
		else{
			echo "<span class='text text-danger'>Fill all the details, it cannot be Empty!</span>";
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
	    <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="">
	  </div>
	  <div class="form-group">
	    <label for="empid">EmpId</label>
	    <input type="number" class="form-control" name="Empid" id="empid" autocomplete="off" value="">
	  </div>
	   <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" name="Email" id="email" autocomplete="off" value="">
	  </div>
	  <div class="form-group">
	    <label for="Password">Password</label>
	    <input type="password" class="form-control" name="password" id="Password" autocomplete="off" value="">
	  </div>
	 
	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
    
    </div>


  </body>
</html>
