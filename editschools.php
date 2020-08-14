<?php

session_start();
if(!isset($_SESSION["role"])){
    header("location:login.php");

 
}

?>

<!DOCTYPE html>
<?php 
	include("connection.php");
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

   
</head>




<body>

<?php
 $sql="SELECT * FROM school WHERE school_id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array('id'=>$_GET["school_id"]));
  $ft = $stmt->fetch(PDO::FETCH_ASSOC);

?>


	<div class="row col-md-9 col-md-offset-1">
		<div class="panel panel-primary">


			<div class="panel-heading text-center">
				MANAGE SCHOOL

			</div>

			<div class="panel-body">
<div style="margin-left:16%";>

	<form action="#" method="POST" class="form-horizontal" role="form" onsubmit="return validate()">
  <div class="form-group">
    <label class="control-label col-sm-2">School ID:</label>
    <div class="col-sm-6">
      <input type="text" readonly="readonly" class="form-control" name="id" placeholder="Enter Full Name" value="<?php echo $ft['school_id']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">School Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="Sname" placeholder="Enter LastName" value="<?php echo $ft['school_name']; ?>">
    </div>
  </div>

  
  <div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $ft['address']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Amount:</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="amount" placeholder="Enter Amount" value="<?php echo $ft['amount']; ?>">
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

  $id=$_POST['id'];
  $name=$_POST['Sname'];
  $address=$_POST['address'];
  $amount=$_POST['amount'];
 
  $sql="UPDATE school SET school_name=:Sname,address=:address,amount=:amount WHERE school_id= :id";
  $pre = $conn->prepare($sql);
  $pre->execute(array(':id'=>$id,':Sname'=>$name,':address'=>$address,':amount'=>$amount,":id"=>$_GET['school_id']));

  header("location:viewschool.php");
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