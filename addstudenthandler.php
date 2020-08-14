<?php 
session_start();
include 'connection.php';
if(isset($_POST['save']))

$stid=$_POST['id'];
$fname=$_POST['fullname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];


$sql="INSERT INTO student(student_id,fullname,gender,address,dob,phone)
 VALUES (:id,:fullname,:gender,:address,:dob,:phone)";

 $stmt=$conn->prepare($sql);

  $stmt->execute(array(':id'=>$stid,':fullname'=>$fname,':gender'=>$gender,':address'=>$address,':dob'=>$dob,':phone'=>$phone));

 
 header("location:adminhome.php");
 ?>