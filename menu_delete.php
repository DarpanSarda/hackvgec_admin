<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;   
}

    $id=$_GET["id"];
    $delhotelquery=mysqli_query($con,"delete from menu where id=$id");

    /*
    if ($query) 
    {
        # code...
        echo'succesful';
    }
    */
    header("location:menu.php");
?>