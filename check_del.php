<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;   
}
$id=$_GET["id"];
$delcheckquery=mysqli_query($con,"delete from check1 where id=$id");
// if($delcheckquery)
// {
//     echo'successful';
// }
// else
// {
//     echo mysqli_error($con);
// }     
header("location:check.php");
?>