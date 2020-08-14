<?php 
session_start();
include 'connection.php';
if(isset($_POST['save']))

$fname=$_POST['fname'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$nation=$_POST['nation'];
$blood=$_POST['blood'];
$class=$_POST['driveclass'];
$phone=$_POST['phonenumber'];
$period=$_POST['period'];

$sql="INSERT INTO application(fullname,dob,gender,address,nationality,blood,class,phone,period)
 VALUES (:name,:dob,:gender,:address,:nationality,:blood,:class,:phone,:period)"; 

 $stmt=$conn->prepare($sql);
 $stmt->execute(array(':name'=>$fname,':dob'=>$date,':gender'=>$gender,':address'=>$address,':nationality'=>$nation,':blood'=>$blood,':class'=>$class,':phone'=>$phone,':period'=>$period));
 header("location:studenthome.php");
 ?>