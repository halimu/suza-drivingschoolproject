<?php

session_start();
if(!isset($_SESSION["role"])){
    header("location:login.php");
 
}

?>

<!doctype html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cs/bootstrap.min.v3.css">
    <link rel="stylesheet" href="cs/style.css">
	<link rel="stylesheet" href="cs/w3.css">
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <script type="text/javascript"  src="jss/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="jss/jquery.dataTables.min.js"></script>
      

       <script type="text/javascript">

  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
</head>


<body>

       
    <div class="row col-md-12 col-md-offset-0">
    	            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                ALL STUDENTS
            </div>
        
         <div class="row body">
          	<div class="col-sm-3 no-padding">
 <ul class="list-group">
        <a href="staffhome.php"><li class="list-group-item">Home</li></a>
        <a href="viewstudents.php"><li class="list-group-item">view student</li></a>
        <a href="#"><li class="list-group-item">View Schedule</li></a>
        <a href="logout.php"><li class="list-group-item">Logout</li></a>
    </ul>

            </div>
            
            <div class="col-sm-9">
  <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Student Id</th><th>FullName</th><th>Gender</th><th>Address</th><th>DOB</th><th>Phone</th>
            </tr>
          </thead>
          <tbody>
                   <?php
include("connection.php");
?>
<?php 
    $sql="SELECT student_id,fullname,gender,address,dob,phone FROM student ";
    $stmt=$conn->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['student_id']));
    echo("</td><td>");
    echo (htmlentities($row['fullname']));
    echo("</td><td>");
    echo (htmlentities($row['gender']));
    echo("</td><td>");
    echo (htmlentities($row['address']));
    echo("</td><td>");
    echo (htmlentities($row['dob']));
    echo("</td><td>");
    echo (htmlentities($row['phone']));
    echo("</td><td>");
   

   
    }
 ?>
</tbody>
        </table>

            </div>
         </div>

     <div class=" panel-footer text-center">
                <small>&copy; ABNAS TECHNOLOGY </small>
            </div>
     </div>
 </div>


 </div>
         
      
 
</body>
</html>
