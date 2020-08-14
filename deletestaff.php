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
		$sql="DELETE FROM staff WHERE staff_id=:staff_id";
		$stmt=$conn->prepare($sql);
$stmt->execute(array(':staff_id'=>$_GET['staff_id']));

header("location:viewstaff.php");

	 ?>

</body>
</html>