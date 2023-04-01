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
    $floor;
    $room_no;
    # code...
    if($row[13]=='yes')
    {
        $floor=1;
        if($row[15]=='ce')
        {
            for($i=21;$i<=40;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='It') {
            # code...
            $floor=1;
            for($i=41;$i<=48;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='ec') {
            # code...
            $floor=1;
            for($i=68;$i<=79;$i++)
            {
                $floor;
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='dsa') {
            # code...
            $floor=2;
            for($i=7;$i<=8;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='ic') {
            # code...
            for($i=9;$i<=10;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='civil') {
            # code...
            for($i=11;$i<=12;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='mech') {
            # code...
            for($i=13;$i<=14;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='chem') {
            # code...
            for($i=15;$i<=16;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='po') {
            # code...
            for($i=17;$i<=18;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='e') {
            # code...
            for($i=19;$i<=20;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
    }
    // echo $row[13];
    // elseif ($row[13]=='no') 
    // {
    //     # code...
    //     echo 'hello';
    // }
    elseif ($row[13]=='no') {
        # code...
        $floor=1;
        if($row[15]=='ce')
        {
            for($i=21;$i<=40;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='It') {
            # code...
            for($i=41;$i<=48;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='ec') {
            # code...
            for($i=48;$i<=60;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='dsa') {
            # code...
            for($i=61;$i<=67;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=2;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='ic') {
            # code...
            for($i=68;$i<=79;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='civil') {
            # code...
            for($i=80;$i<=94;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=2;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='mech') {
            # code...
            for($i=95;$i<=120;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=2;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='chem') {
            # code...
            for($i=121;$i<=141;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=3;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='po') {
            # code...
            for($i=142;$i<=159;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=3;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
        elseif ($row[15]=='e') {
            # code...
            for($i=160;$i<=180;$i++)
            {
                for ($j=1; $j <=3 ; $j++) { 
                    # code...
                    $selreg="SELECT * FROM `rooms_boys` WHERE `Bed`=$j AND `Room_no`=$i";
                    $resreg=mysqli_query($con,$selreg);
                    $nreg=mysqli_num_rows($resreg);
                    // echo 'hello'.$nreg;
                    if ($nreg==0) {
                        # code...
                        // $insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`,`pd`,`dept`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12],'$row[13]','$row[15]')");
                        $floor=1;
                        $quuu="INSERT INTO `rooms_boys`(`Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('$j','$i','$row[15]','$row[1]','$row[2]','$row[13]','$floor')";
                        $inss=mysqli_query($con,$quuu);
                        // INSERT INTO `rooms_boys`(`id`, `Bed`, `Room_no`, `Department`, `name`, `email`, `PD`, `floor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
                        // exit;
                        $del=mysqli_query($con,"delete from registration where rid=$id");
                        header("location:register.php");
                    }
                    else
                    {
                        echo 'room full';
                    }
                    // echo mysqli_error($con);
                }
            }
        }
    }
    }
    //$insert_query=mysqli_query($con,"INSERT INTO `boys`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]')");


    //$del=mysqli_query($con,"delete from registration where rid=$id");

    // if($insert_query)
    // {
    //     echo'successful';
    // }
    // else
    // {
    //     echo mysqli_error($con);
    // }   
// elseif ($row[10]=="female") {
//     # code...
//     $insert_query=mysqli_query($con,"INSERT INTO `girls`(`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `gender`, `category`, `addmission-type`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]')");

    
//     $del=mysqli_query($con,"delete from registration where rid=$id");
    
//     // if($insert_query)
//     // {
//     //     echo'successful';
//     // }
//     // else
//     // {
//     //     echo mysqli_error($con);
//     // }   
// }
// header("location:register.php");
?>