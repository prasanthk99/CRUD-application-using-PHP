<?php
	include "connect.php";
	
	if($conn){
		$sql = "SELECT * FROM CRUD";	
		$result= Mysqli_query($conn,$sql);
		
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

    <title>Add Task</title>
  </head>
  <body>
	  <div class="container my-4">  
	    <a href="form.php" class="text-light"><button class="btn btn-primary">ADD USER</button><a>
	    
	    <table class="table my-4">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">SI NO</th>
		      <th scope="col">Name</th>
		      <th scope="col">Emp ID</th>
		      <th scope="col">Email</th>
		      <th scope="col">Password</th>
		      <th scope="col">Operation</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php while($row = Mysqli_fetch_assoc($result)){ ?>
		    <tr>
		      <th scope="row"><?php echo $row['id'] ?></th>
		      <td><?php echo $row['Name'] ?></td>
		      <td><?php echo $row['Empid'] ?></td>
		      <td><?php echo $row['Email'] ?></td>
		      <td><?php echo $row['Password'] ?></td>
		      <td>
		      	<a href="update.php?updateid=<?=$row['id']?>"><input type="button" value="Update" class="btn btn-primary"/></a>
		      	<a href="delete.php?deleteid=<?=$row['id']?>"><input type="button" value="Delete" class="btn btn-danger"/></a>
		      </td>
		    </tr>
		   <?php } ?>
		  </tbody>
		</table>

		
</table>
	  </div>
	  
	  	
    
  </body>
</html>
