

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
				REGISTRATION FORM

			</div>

			<div class="panel-body">
<div style="margin-left:16%";>

	<form action="registerhandler.php" method="POST" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2">First Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="fname" placeholder="Enter FirstName">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="lname" placeholder="Enter LastName">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">User Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="user" placeholder="Enter UserName">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Password:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="pass" placeholder="Enter password">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Role:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="role" placeholder="Enter your Role">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="save">Submit</button>
    </div>
  </div>
	</div>
	
		<div style="text-align: center;">
			<p>
				<b>Are you Registered? <a href="login.php">SIGN IN</a></b>
			</p>
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