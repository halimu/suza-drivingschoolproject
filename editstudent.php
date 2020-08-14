<?php

session_start();
if(!isset($_SESSION["role"])){
    header("location:login.php");

 
}

?>

<!DOCTYPE html>

<?php
include "connection.php"
?>
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

    <script type="text/javascript">
	
			function validate(){
	var phone=document.getElementById('phone');
	
		if (phone.value.length != 10){
		alert("Phone number is not valid");
		return false;
	}
	
	
}
</script>

</head>




<body>


<?php
 $sql="SELECT * FROM student WHERE student_id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array('id'=>$_GET["student_id"]));
  $ft = $stmt->fetch(PDO::FETCH_ASSOC);

?>


	<div class="row col-md-9 col-md-offset-1">
		<div class="panel panel-primary">


			<div class="panel-heading text-center">
				ADD STUDENT

			</div>

			<div class="panel-body">
<div style="margin-left:16%";>

	<form action="addstudenthandler.php" method="POST" class="form-horizontal" role="form" onsubmit="return validate()">
  <div class="form-group">
    <label class="control-label col-sm-2">student_id:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="id" placeholder="Enter Full Name" value="<?php echo $ft['student_id']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">fullname:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="fullname" placeholder="Enter LastName" value="<?php echo $ft['fullname']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">gender:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="gender" placeholder="Enter Gender" value="<?php echo $ft['gender']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $ft['address']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">dob:</label>
    <div class="col-sm-6">
      <input type="date" class="form-control" name="dob" placeholder="Enter dob" value="<?php echo $ft['dob']; ?>">
    </div>

   
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2">phone:</label>
    <div class="col-sm-6">
    	
      <input type="number"  id="phone" class="form-control" name="phone" placeholder="Enter phone" value="<?php echo $ft['phone']; ?>">
    </div>
</div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="save">Save</button>
    </div>
  </div>
	</div>
	
		

	</form>

	<?php 
include("connection.php");

if(isset($_POST['save'])){

  $id=$_POST['student_id'];
  $name=$_POST['fullname'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $dob=$_POST['dob'];
  $phone=$_POST['phone'];
 
 
 
  $sql="UPDATE student SET student_id=:student_id,fullname=:fullname,gender=:gender,address=:address,dob=:dob,phone=:phone WHERE student_id= :id";
  $pre = $conn->prepare($sql);
  $pre->execute(array(':student_id'=>$id,':fullname'=>$name,':gender'=>$gender,':address'=>$address,':dob'=>$dob,':phone'=>$phone,":id"=>$_GET['school_id']));

  header("location:viewstudent.php");
}

?>
	

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