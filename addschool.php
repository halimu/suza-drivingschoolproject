<?php

session_start();
if(!isset($_SESSION["role"])){
    header("location:login.php");

 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Driving school management system</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="cs/bootstrap.min.v3.css">
    <link rel="stylesheet" href="cs/style.css">
	<link rel="stylesheet" href="cs/w3.css">
    <link rel="icon" href="#" type="image/x-icon">

   
</head>




<body>


	<div class="row col-md-9 col-md-offset-1">
		<div class="panel panel-primary">


			<div class="panel-heading text-center">
				MANAGE SCHOOL

			</div>

			<div class="panel-body">
<div style="margin-left:16%";>

	<form action="addschoolhandler.php" method="POST" class="form-horizontal" role="form" onsubmit="return validate()">
  <div class="form-group">
    <label class="control-label col-sm-2">School ID:</label>
    <div class="col-sm-6">
      <input type="hidden" class="form-control" name="id" placeholder="Enter Full Name">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">School Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="Sname" placeholder="Enter LastName">
    </div>
  </div>

  
  <div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address" placeholder="Enter Address">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Amount:</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="amount" placeholder="Enter Amount">
  </div>
    </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="save">Save</button>
    </div>
  </div>
	</div>
	
		

	</form>
	

</div>
		</div>

		<div class=" panel-footer text-center">
				<small>&copy; ABNAS TECHNOLOGY</small>
			</div>
	

	</div>
 
	</form>


				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>



</body>
</html>