<?php
ob_start();
session_start();
//include 'includes/dbconfig.php';

// it will never let you open index(login) page if session is set
//ob_start();
//session_start();
 if ( isset($_SESSION['user'])=="" ) {
  header("Location: index.php");
  exit;
 }
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="includes/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="includes/css/style.css" rel='stylesheet' type='text/css' />
<link href="includes/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="includes/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="includes/js/bootstrap.min.js"></script>
<script src="includes/js/jquery-1.8.2.js"></script>
<script>
$(document).ready(function() {
  $(".add").click(function() {
    $('<div class="col-sm-8"><input class="btn-success btn" name="file[]" type="file" ><span class="rem" ><a href="javascript:void(0);" >Remove</span></div>').appendTo(".contents");
    });
  $('.contents').on('click', '.rem', function() {
    $(this).parent("div").remove();
  });

});
</script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
     <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="home.php">ADMIN</a>
         </div>
         <!-- /.navbarfg-header -->
         <ul class="nav navbar-nav navbar-right">
         <li class="m_2"><a href="change_password.php"> Change Password</a></li>
         <li class="m_2"><a href="logout.php"> Logout</a></li>
         </ul>


         <div class="navbar-default sidebar" role="navigation">
             <div class="sidebar-nav navbar-collapse">

               <ul class="nav" id="side-menu">
                   <li>  <a href="home.php"><i class="fa fa-indent nav_icon"></i>Dashboard</a>  </li>
                   <li>  <a href="#"><i class="fa fa-indent nav_icon"></i>Projects</a>
                       <ul class="nav nav-second-level">
                           <li> <a href="projects.php">Add Projects</a> </li>
                           <li> <a href="interior_view.php">View Interior Projects</a> </li>
                           <li> <a href="exterior_view.php">View Exterior Projects</a> </li>
                           <li> <a href="remodeling_view.php">View Remodeling Project</a> </li>
                       </ul>
                   </li>
                   <li> <a href="testimonial.php"><i class="fa fa-indent nav_icon"></i>Testimonial</span></a>   </li>
                   <li> <a href="change_password.php"><i class="fa fa-indent nav_icon"></i>Change Password</a>  </li>
                 </ul>

             </div>
             <!-- /.sidebar-collapse -->
         </div>
         <!-- /.navbar-static-side -->
     </nav>

        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	      <center> <h3>Add Project </h3></center>
  	         <div class="tab-content">
               <div class="tab-pane active" id="horizontal-form">
                       <form class="form-horizontal" name="frm" action="upload.php" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                           <label for="focusedinput" class="col-sm-2 control-label">Title</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control1" name="title" id="title" placeholder="Project Title" required>
                           </div>

                         </div>

                         <div class="form-group">
                           <label for="focusedinput" class="col-sm-2 control-label">Title Content</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control1" name="titlecontent" id="titlecontent" placeholder="Title Content" required>
                           </div>

                         </div>

                         <div class="form-group">
                           <label for="focusedinput" class="col-sm-2 control-label">Services</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control1" name="services" id="services" placeholder="Service Name" required>
                           </div>

                         </div>

                         <div class="form-group">
                           <label for="inputPassword" class="col-sm-2 control-label">Service Content</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control1" name="servicescontent" id="servicescontent" placeholder="Service Content" required>

                           </div>
                         </div>

                     <div class="form-group">
                           <label for="inputPassword" class="col-sm-2 control-label">Select Category</label>
                           <div class="col-sm-8">
                             <select name="table" >
                               <option  value="interior">Interior</option>
                               <option  value="exterior">Exterior</option>
                               <option  value="remodeling">Remodeling</option>
                             </select>
                           </div>
                         </div>

                        <div class="form-group">

               <center><br><br>
                          <div class="col-sm-8 col-sm-offset-">
<span><a href="javascript:void(0);" class="add" >Add More</a></span><br>
                             <input class="btn-success btn" class="files" name="file[]" type="file" multiple="multiple" required ><br>


                          </div>


                           <div class="contents"> </div><br> <br>
                          <div class="col-sm-8 col-sm-offset-">
                            <input class="btn-success btn" type="submit" class="submit" value="submit" name="submit" />
                             <input class="btn-success btn" type="Reset" class="reset" name="reset" />
                          </div>
</div>
                         </center>
                      </form>


                               <br/>
                               <br/>

               				<!-------Including PHP Script here------>

                   </div>

               		   <!-- Right side div -->
                       </div>
  </div>
  <div class="copy_layout">
      <p>Copyright © 2016 SAKTHI BUILDERS. All Rights Reserved | Design by <a href="http://pepiras.com/" target="_blank">Pepiras</a> </p>
  </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="includes/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="includes/js/metisMenu.min.js"></script>
<script src="includes/js/custom.js"></script>
</body>
</html>
