<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;   
}

$email=$_POST["email"];
$dt = $_POST["dt"];
// $ch=$_POST["ch"];
    $insert_query=mysqli_query($con,"INSERT INTO `check1` (`name`, `room_no`, `bed_no`, `email`, `checkin`) VALUES ('Darpan', '2', '2', '$email', '$dt');");

// elseif ($ch=='checkout') {
//     $insert_query=mysqli_query($con,"INSERT INTO `check1` (`name`, `room_no`, `bed_no`, `email`, `checkin`, `checkout`) VALUES ('Darpan', '2', '2', '$email', '', '$dt');");
// }
// if($insert_query)
// {
//     echo'successful';
// }
// else
// {
//     echo mysqli_error($con);
// } 

header("location:check.php");
?>