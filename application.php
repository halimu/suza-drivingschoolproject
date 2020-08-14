
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

</head>

<script type="text/javascript">
	
			function validate(){
	var phone=document.getElementById('phone');
	
		if (phone.value.length != 10){
		alert("Phone number is not valid");
		return false;
	}
	
	
}
</script>


<body>

<div class="container">
	<div class="row col-md-11 col-md-offset-0">
		<div class="panel panel-primary">


			<div class="panel-heading text-center">
				APPLICATION FORM

			</div>

			<div class="panel-body">
<div style="margin-left:16%";>
	<form action="addapphandler.php" method="POST" onsubmit="return validate()" >
		<table>
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="fname" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required placeholder="Enter Your Middle name"></td>
			
				<td>Date of Birth</td>
				<td><input type="date" name="date" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><select name="gender" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Male</option>
						<option>Female</option>
					</select></td> 
				
				<td>Address</td>
				<td><input type="address" name="address"placeholder="Enter your address" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required> </td>
				
			</tr>
			<tr>


				<td>Nationality</td>
				
			<td><select name="nation" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Tanzanian</option>
						<option>Kenya</option>
						<option>Uganda</option>
						<option>Zambia</option>
				 	</select></td> 
			
				
				<td>Blood Group</td>
				<td><select name="blood" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O-</option>
						<option>O+</option>
						<option>AB+</option>
						<option>AB- </option>
				 	</select></td> 
				
				
			</tr>
				
				
			
			<tr>
				<td>Drive Class</td> 
				<td><select name="driveclass" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>A</option>
						<option>B1</option>
						<option>D1</option>
						<option>C</option>
						<option>A and B1</option>
						<option>A and D1</option>
						<option>A and C</option>
						<option></option>
					</select></td>

						<td>Phone Number</td>
				<td><input type="number" name="phonenumber" id="phone" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required placeholder="Enter Your Phone number"></td>

			</tr>
				
			<tr>
		

				<td>Period</td>
				<td><select name="period" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Morning</option>
						<option>Afternoon</option>
						<option>everning</option>
					</select></td>
			
				
				
			</tr>
			
				
			

		</table>

		<button type="submit" name="save" class="btn btn-primary col-md-offset-4">SUBMIT</button>
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