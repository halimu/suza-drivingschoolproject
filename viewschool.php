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
      
</head>



<body>

       
    <div class="row col-md-12 col-md-offset-0">
    	            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                ALL STAFF
            </div>
        
         <div class="row body">
          	<div class="col-sm-3 no-padding">
<ul class="list-group">
        <a href="studenthome.php"><li class="list-group-item">Home</li></a>
        <a href="viewschool.php"><li class="list-group-item">School Details</li></a>
        <a href="application.php"><li class="list-group-item">Apply</li></a>
        <a href="viewresult.php"><li class="list-group-item">View Result</li></a>
        <a href="logout.php"><li class="list-group-item">Logout</li></a>
    </ul>

            </div>
            
            <div class="col-sm-9">

         <?php
include("connection.php");
?>
            	
                <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>School Id</th><th>School Name</th><th>Address</th><th>Amount</th>
            </tr>
          </thead>


            <?php 
    $sql="SELECT school_id,school_name,address,amount FROM school ";
    $stmt=$conn->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['school_id']));
    echo("</td><td>");
    echo (htmlentities($row['school_name']));
    echo("</td><td>");
    echo (htmlentities($row['address']));
    echo("</td><td>");
    echo (htmlentities($row['amount']));
    echo("</td><td>");

   
  
    }
 ?>  
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
