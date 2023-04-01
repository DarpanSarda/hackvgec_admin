<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;   
}
$queryb = "select *from boys";  
$resultb = mysqli_query($con, $queryb);
$rowb = mysqli_fetch_array($resultb);
$insb=mysqli_query($con, "INSERT INTO `attendance`(`name`, `email`, `Gender`) VALUES ('$rowb[1]','$rowb[2]','$rowb[10]')");
$queryg = "select *from girls";  
$resultg = mysqli_query($con, $queryg);
$rowg = mysqli_fetch_array($resultg);
$insg=mysqli_query($con, "INSERT INTO `attendance`(`name`, `email`, `Gender`) VALUES ('$rowg[1]','$rowg[2]','$rowg[10]')");

header("location:attendance.php");
?>