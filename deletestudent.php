<?php

session_start();
if(!isset($_SESSION["role"])){
    header("location:login.php");

 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	include("connection.php");
	$sql="DELETE FROM student WHERE student_id=:student_id";
	$stmt=$conn->prepare($sql);
		$stmt->execute(array(':student_id'=>$_GET['student_id']));
	header("location:viewstudent.php");



	?>

</body>
</html>