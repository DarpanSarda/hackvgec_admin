<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Hostel Admin - Vishwakarma Government Engineering College</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/login/vgec1.jpg" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.html" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">
 
<!-- Start wrapper-->
 <div id="wrapper">
 <?php include 'sidebar.php'; ?>
   <!--End sidebar-wrapper-->
  <?php include 'header.php'; ?>

  <div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header"><center>Registration Table</center>
       
       <?php
       $selreg="select * from registration";
        $resreg=mysqli_query($con,$selreg);
        $nreg=mysqli_num_rows($resreg);
        ?>
		  <div class="card-action">
                    <div class="dropdown">
             <!-- <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div> -->
              </div>
             </div>
		 </div>
         <?php
                
 //define total number of results you want per page  
 $results_per_page = 6;  
  
 //find the total number of results stored in the database  
 $query = "select *from registration";  
 $result = mysqli_query($con, $query);  
 $number_of_result = mysqli_num_rows($result);  

 //determine the total number of pages available  
 $number_of_page = ceil ($number_of_result / $results_per_page);  

 //determine which page number visitor is currently on  
 if (!isset ($_GET['page']) ) {  
     $page = 1;  
 } else {  
     $page = $_GET['page'];  
 }  
 $page_first_result = ($page-1) * $results_per_page;  

 //retrieve the selected results from database   
 $query = "SELECT *FROM registration LIMIT " . $page_first_result . ',' . $results_per_page;  
 $result = mysqli_query($con, $query);  
?>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th></th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Mobile no</th>
                     <th>Address</th>
                     <th>caste</th>
                     <th>sub-caste</th>
                     <th>city</th>
                     <th>state</th>
                     <th>marks</th>
                     <th>gender</th>
                     <th>category</th>
                     <th>Admission-type</th>
                     <th>PD</th>
                     <th>Department</th>
                     <th>image</th>
                     <th>Confirmation</th>
                   </tr>
                   </thead>
                   <?php
                   $i=0;
                   
while ($row = mysqli_fetch_array($result))
{$i++;
                   $row=mysqli_fetch_row($resreg);
                   echo"
                   <tbody><tr>
                    <td>$i</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td>$row[5]</td>
                    <td>$row[6]</td>
                    <td>$row[7]</td>
                    <td>$row[8]</td>
                    <td>$row[9]</td>
                    <td>$row[10]</td>
                    <td>$row[11]</td>
                    <td>$row[12]</td>
                    <td>$row[13]</td>
                    <td>$row[15]</td>
                    <td><img src='assets/images/login/$row[14]' class='product-img' alt='product img'></td>
                    <td><a href='register_ins.php?id=$row[0]'><button type='button' class='btn btn-outline-success'>Approve</button></a></td>
                    <td><button type='button' class='btn btn-outline-danger'>Disapprove</button></td>
                   </tr>";} ?>

                 </tbody></table>
               </div>
</div>
   
 <nav aria-label="...">
  <ul class="pagination justify-content-center">
  
  <?php  
  for($page = 1; $page<= $number_of_page; $page++) {  
    //   echo ' <a href = "register.php?page=' . $page . '">' . $page . ' </a> 
    //   ';
    echo '
      
    <li class="page-item"><a class="page-link" href = "register.php?page=' . $page . '">' . $page . ' </a></li>
    ';}
    ?>
  </ul>
</nav>
	 </div>
     <br>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
  </div><!--End wrapper-->
  <?php include 'footer.php'; ?>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.html"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
