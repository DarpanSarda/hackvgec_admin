<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");                                                       
    exit;   
}
$id=$_GET["id"];
// $Gender=$_GET['gender'];
$regsel=mysqli_query($con,"select * from registration where rid=$id");
$row=mysqli_fetch_row($regsel);
// echo $row;
// $number_of_result = mysqli_num_rows($regsel);  
// echo $row[10];

if ($row[10]=="male") 
{  
    # code...
    
    $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]')");


    $del=mysqli_query($con,"delete from registration where rid=$id");

    // if($insert_query)
    // {
    //     echo'successful';
    // }
    // else
    // {
    //     echo mysqli_error($con);
    // }   
}
elseif ($row[10]=="female") {
    # code...
    $insert_query=mysqli_query($con,"INSERT INTO `girls`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]')");

    
    $del=mysqli_query($con,"delete from registration where rid=$id");
    
    // if($insert_query)
    // {
    //     echo'successful';
    // }
    // else
    // {
    //     echo mysqli_error($con);
    // }   
}
header("location:register.php");
?>