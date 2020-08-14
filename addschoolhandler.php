<?php 
session_start();
include 'connection.php';
if(isset($_POST['save']))

$name=$_POST['Sname'];
$address=$_POST['address'];
$amount=$_POST['amount'];



$sql="INSERT INTO school(school_name,address,amount)
 VALUES (:name,:address,:amount)"; 

 $stmt=$conn->prepare($sql);
 $stmt->execute(array(':name'=>$name,':address'=>$address,':amount'=>$amount));
 header("location:viewschools.php");
 ?>

