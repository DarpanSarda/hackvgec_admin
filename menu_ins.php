<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
        exit;   
    }
    $type=$_POST["type"];
    $hostel=$_POST["hostel"];
    $item1=$_POST["item1"];
    $item2=$_POST["item2"];
    $item3=$_POST["item3"];
    $item4=$_POST["item4"];
    $item5=$_POST["item5"];
    $insert_query=mysqli_query($con,"INSERT INTO `menu`(`type`, `hostel`, `item1`, `item2`, `item3`, `item4`, `item5`) VALUES ('$type','$hostel','$item1','$item2','$item3','$item4','$item5')");
    
    //  if($insert_query)
    // {
    //     echo'successful';
    // }
    // else
    // {
    //     echo mysqli_error($con);
    // }  
    header("location:menu.php");
?>