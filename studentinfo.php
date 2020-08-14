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
				REGISTRATION FORM

			</div>

			<div class="panel-body">
<div style="margin-left:16%";>
	<form action="#" method="POST" onsubmit="return validate()" >
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="firstName" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;" required placeholder="Enter Your First name"></td>
			
			
				<td>Middle Name</td>
				<td><input type="text" name="MiddleName" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required placeholder="Enter Your Middle name"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lastName" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required placeholder="Enter Your last name"></td>
			
			
				<td>Date of Birth</td>
				<td><input type="date" name="date" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><select name="gender" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Choose your gender</option>
						<option>Male</option>
						<option>Female</option>
					</select></td> 
				
				<td>Nationality</td>
				
			<td><select name="Nationality" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Choose Your Nationality</option>
						<option>TANZANIAN</option>
						<option>KENYA</option>
						<option>UGANDA</option>
						<option>ZAMBIA</option>
						<option></option>
						<option></option>
						<option></option>
						<option></option>
				 	</select></td> 
			
				
				
			</tr>
			<tr>
				<td>Blood Group</td>
				<td><select name="blood" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Choose Blood You have</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O-</option>
						<option>O+</option>
						<option>AB+</option>
						<option>AB- </option>
				 	</select></td> 
				
				
				<td>Address</td>
				<td><input type="Address" name="address"placeholder="Enter your address" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required> </td>
			</tr>
				
				
			
			<tr>
				<td>Disability</td>
				<td><select name="Disability" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>You have any disability</option>
						<option>None</option>
						<option></option>
						<option></option>
						<option></option>
						<option></option>
				 	</select></td> 
			
			
				<td>Drive Class</td> 
				<td><select name="driveclass" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Choose drive class</option>
						<option>A</option>
						<option>B1</option>
						<option>D1</option>
						<option>C</option>
						<option>A and B1</option>
						<option>A and D1</option>
						<option>A and C</option>
						<option></option>
					</select></td>
			
			</tr>
				<td>Position</td>
				<td><select name="position" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Choose Your Position</option>
						<option>
						Student
						</option>
						
					</select></td>
					
					<td>Starting date</td>
				<td><input type="date" name="datetwo" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required ></td>
			
					
			</tr>
			<tr>
			
				<td>Period</td>
				<td><select name="period" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%; "required>
						<option>Choose your period</option>
						<option>Morning</option>
						<option>Afternoon</option>
						<option>everning</option>
					</select></td> 
				
			
			
				
				<td>Phone Number</td>
				<td><input type="number" name="phoneNumber" id="phone" style="padding: 5px; margin: 3px 5px 3px 5px; border: 1px solid silver; border-radius: 5px; width: 85%;"required placeholder="Enter Your Phone number"></td>
			</tr>
			
				
			

		</table>

		<button type="submit" class="btn btn-primary col-md-offset-4">SUBMIT</button>
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