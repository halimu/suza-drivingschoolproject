

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
      <a href="adminhome.php"><li class="list-group-item">Home</li></a>
      <a href="viewapplication.php"><li class="list-group-item">View Application</li></a>
      <a href="addschool.php"><li class="list-group-item">Manage School</li></a>
        <a href="viewschools.php"><li class="list-group-item">View School</li></a>
      <a href="addstaff.php"><li class="list-group-item">Manage Staff</li></a>
      <a href="viewstaff.php"><li class="list-group-item">View Staff</li></a>
      <a hef="addstudent.php"><li class="list-group-item">Manage Studet</li></a>
      <a href="viewstudent.php"><li class="list-group-item">View Student</li></a>
      <a href="logout.php"><li class="list-group-item">Logout</li></a>
  </ul>

            </div>
            
            <div class="col-sm-9">
  <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Student Id</th><th>FullName</th><th>Gender</th><th>Address</th><th>DOB</th><th>Phone</th><th>Edit</th><th>Delete</th>
            </tr>
          </thead>
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
   

    echo('<a href="editstudent.php?student_id='.$row['student_id'].'"> <b> Edit </b> </a>');
    echo("</td><td>");
    echo('<a href="deletestudent.php?student_id='.$row['student_id'].'"><b> Delete </b></a>');
    echo("</td></tr>\n");
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
