<?php
session_start();
include("connection.php");
$id=$_SESSION["edit"];
$name=$db->real_escape_string($_POST["name"]);
$address=$db->real_escape_string($_POST["address"]);
$phone=$db->real_escape_string($_POST["phone"]);
$occupation=$db->real_escape_string($_POST["occupation"]);
echo $id;
$role=$db->real_escape_string($_POST["role"]);

$q=$db->query("update staff set st_Name='$name',st_Address='$address',st_Pnone=$phone,Occupation='$occupation',Role='$role' where st_ID= '$id'") or die($q->error);
header("location:viewstaff.php");

 ?>
<?php
session_start();
include("connection.php");


$id=$_SESSION["school_id"];
$name=$conn->real_escape_string($_POST["name"]);
$address=$conn->real_escape_string($_POST["address"]);
$amount=$conn->real_escape_string($_POST["amount"]);

$stmt=$conn->prepare($sql);

$stmt->execute(array("update school set school_Name='$name',address='$address',amount=$amount where school_id= '$id'") or die($q->error);
header("location:viewschools.php");

 ?>
