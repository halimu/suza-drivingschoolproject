
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
      
</head>

<body>

<div class="row col-md-12 col-md-offset-0">
                    <div class="panel panel-primary">
                <div class="panel-heading text-center">
                STAFF SECTION

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
                <b>
                Welcome To The Staff Section</b>
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
