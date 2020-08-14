<?php 
session_start();
include 'connection.php';
if(isset($_POST['save']))

$id=$_POST['id'];
$fname=$_POST['fullname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$ocupation=$_POST['occupation'];
$phone=$_POST['phone'];


$sql="INSERT INTO staff(staff_id,fullname,gender,address,occupation,phone)
 VALUES (:id,:fullname,:gender,:address,:occupation,:phone)";

 $stmt=$conn->prepare($sql);

  $stmt->execute(array(':id'=>$id,':fullname'=>$fname,':gender'=>$gender,':address'=>$address,':occupation'=>$ocupation,':phone'=>$phone));

 
 header("location:adminhome.php");
 ?>