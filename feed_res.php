<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
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
    <?php
        $id=$_GET['id'];
        $selpack="select * from contact where cid=$id";
        $respack=mysqli_query($con,$selpack);
        $n=mysqli_num_rows($respack);
        $row=mysqli_fetch_row($respack);

    ?>
  <!--Start Dashboard Content-->
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
       <div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
	
       <div class="card-title text-uppercase text-center py-3">Feedback Reply</div>
		    <form action="fed_rep.php" method="POST" autocomplete="">
                    <br>
                    <div class="form-group">
                        <input class="form-control" type="text" name="sub" placeholder="Subject" required>
                    </div>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" name="fer" placeholder="Reply" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                    </div>
                        <input class="form-control form-control-lg" id="formFileLg" name="fid" value="<?php echo $uid; ?>" type="hidden">
                        <input class="form-control form-control-lg" id="formFileLg" name="em" value="<?php echo $row[1]; ?>" type="hidden">
                    <br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Reply">
                    </div>
</form>
</div>
</div>
</div>
</div>
	 </div>
</div>
</div>
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
  <?php //include 'footer.php'; ?>
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
