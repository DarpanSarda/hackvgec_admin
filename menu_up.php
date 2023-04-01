<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
$id=$_POST["id"];
$type=$_POST["type"];
$hostel=$_POST["hostel"];
$item1=$_POST["item1"];
$item2=$_POST["item2"];
$item3=$_POST["item3"];
$item4=$_POST["item4"];
$item5=$_POST["item5"];
    $query=mysqli_query($con,"update menu set type='$type',hostel='$hostel',item1='$item1',item2='$item2',item3='$item3',item4='$item4',item5='$item5' where id=$id");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:menu.php");

?>