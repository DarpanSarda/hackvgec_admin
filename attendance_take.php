<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;   
}
$id=$_GET["id"];
$insb=mysqli_query($con, "delete from attendance where id=$id");

header("location:attendance.php");
?>