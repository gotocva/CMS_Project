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
<?php
        require('includes/dbconfig.php');



        $sql = mysqli_query($conn,"SELECT * FROM exterior ORDER BY id ASC");


        //while loop removed from here
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

  <!-- added by me for add testimonial -->



  <div id="page-wrapper">
  <div class="graphs">
 <div class="xs">

       <div class="tab-content">
      <div class="tab-pane active" id="horizontal-form">






<br>
<center><h3>Display exterior  </h3></center>
<!-- /.table-responsive -->
<div class="table-responsive">
 <table class="table table-bordered">
   <thead>
     <tr>

       <th>ID</th>
       <th>IMAGE 1</th>
       <th>IMAGE 2</th>
       <th>IMAGE 3</th>
       <th>IMAGE 4</th>
       <th>Title</th>
       <th>Title Content</th>
       <th>Services</th>
       <th>Services Content</th>
       <th>EDIT</th>
       <th>DELETE</th>

     </tr>
   </thead>
   <tbody>

     <?php
          while ($rows = mysqli_fetch_assoc($sql)) {
               ?>
     <tr>

       <td><?php echo $rows['id']; ?></td>
       <td><img height="100" width="100" src="<?php echo $rows['img1']; ?>"</td>
       <td><img height="100" width="100" src="<?php echo $rows['img2']; ?>"</td>
       <td><img height="100" width="100" src="<?php echo $rows['img3']; ?>"</td>
       <td><img height="100" width="100" src="<?php echo $rows['img4']; ?>"</td>
                   <td><?php echo $rows['title']; ?></td>
                   <td><?php echo $rows['titlecontent']; ?></td>
                   <td><?php echo $rows['services']; ?></td>
                   <td><?php echo $rows['servicescontent']; ?></td>
                   <?php  $eurl = "edit_projects.php";
                   $eurl1 = $eurl."?id=".$rows['id']."&table=exterior";
                  ?>

<td><?php echo '<a href="'.$eurl1.'" class="btn btn-sm btn-danger">Edit</a>'; ?></td>
                   <?php  $url = "delete.php";
                               $url1 = $url."?id=".$rows['id']."&table=exterior";
                              ?>

       <td><?php echo '<a href="'.$url1.'" class="btn btn-sm btn-danger">Delete</a>'; ?></td>


     </tr>
     <?php
          }
           ?>
   </tbody>
 </table>
</div>
<!-- /.table-responsive -->





<br><br>
<div class="panel-footer">
</div>
</form>
</div>
</div>
<div class="copy_layout">
<p>Copyright © 2016 SAKTHI BUILDERS. All Rights Reserved | Design by <a href="http://pepiras.com/" target="_blank">Pepiras</a> </p>
</div>
</div>
</div>
<!-- /#page-wrapper -->
</div>



        <!-- added by me for add testimonial -->

    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="includes/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="includes/js/metisMenu.min.js"></script>
<script src="includes/js/custom.js"></script>
</body>
</html>
