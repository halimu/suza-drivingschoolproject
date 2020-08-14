<?php
session_start();
include 'connection.php';

if(isset($_POST['login'])){

    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM user WHERE (username=:user AND password=:pass)";

    $stmt=$conn->prepare($sql);

    $stmt->execute(array('user'=>$user,'pass'=>$pass));

    if($stmt->rowCount()==1){

        $data =  $stmt->fetch();

        $_SESSION["role"]=$data["role"];
        //sessions
      //  header("location:adminhome.php");

        if ($_SESSION["role"] === "student" ){

              header("location:studenthome.php");
              
        }else if ($_SESSION["role"] === "admin" ){

            header("location:adminhome.php");
        }

        else if ($_SESSION["role"] === "staff" ){

            header("location:staffhome.php");
        }



    }else{
        header("location:login.php");
    }
}else{
    header("location:login.php");
}
?>
