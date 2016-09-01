<?php
ob_start();
session_start();
include 'includes/dbconfig.php';

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
<title>Admin Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="includes/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="includes/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="includes/css/lines.css" rel='stylesheet' type='text/css' />
<link href="includes/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="includes/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="includes/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="includes/js/metisMenu.min.js"></script>
<script src="includes/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="includes/js/d3.v3.js"></script>
<script src="includes/js/rickshaw.js"></script>
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
         <!-- /.navbar-header -->
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

        <?php

$sql = mysqli_query($conn,"SELECT * FROM interior ORDER BY id ASC");
$sql1 = mysqli_query($conn,"SELECT * FROM exterior ORDER BY id ASC");
$sql2 = mysqli_query($conn,"SELECT * FROM remodeling ORDER BY id ASC");

$count = mysqli_num_rows($sql);
$count1 = mysqli_num_rows($sql1);
$count2 = mysqli_num_rows($sql2);

         ?>
        <div id="page-wrapper">
        <div class="graphs">

     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <a href="testimonial.php"><h5><strong>Add Testimonial</strong></h5></a>

                    </div>
                </div>
        	</div>

          <div class="col_3">
            	<div class="col-md-3 widget widget1">
            		<div class="r3_counter_box">
                        <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                        <div class="stats">
                          <a href="interior_view.php"><h5><strong>Interior Projects <?php echo $count; ?></strong></h5></a>

                        </div>
                    </div>
            	</div>

              <div class="col_3">
                	<div class="col-md-3 widget widget1">
                		<div class="r3_counter_box">
                            <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                            <div class="stats">
                              <a href="exterior_view.php"><h5><strong>Exterior Projects <?php echo $count1; ?></strong></h5></a>

                            </div>
                        </div>
                	</div>

                  <div class="col_3">
                    	<div class="col-md-3 widget widget1">
                    		<div class="r3_counter_box">
                                <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                                <div class="stats">
                                  <a href="remodeling_view.php"><h5><strong>Remodeling Projects <?php echo $count2; ?></strong></h5></a>

                                </div>
                            </div>
                    	</div>


                      <div class="col_3">
                        	<div class="col-md-3 widget widget1">
                        		<div class="r3_counter_box">
                                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                                    <div class="stats">
                                      <a href="projects.php"><h5><strong>Add Projects</strong></h5></a>

                                    </div>
                                </div>
                        	</div>

                          <div class="col_3">
                            	<div class="col-md-3 widget widget1">
                            		<div class="r3_counter_box">
                                        <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                                        <div class="stats">
                                          <a href="interior_view.php"><h5><strong>View Interior Projects</strong></h5></a>

                                        </div>
                                    </div>
                            	</div>

                              <div class="col_3">
                                	<div class="col-md-3 widget widget1">
                                		<div class="r3_counter_box">
                                            <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                                            <div class="stats">
                                              <a href="exterior_view.php"><h5><strong>View Exterior Projects</strong></h5></a>

                                            </div>
                                        </div>
                                	</div>

                                  <div class="col_3">
                                    	<div class="col-md-3 widget widget1">
                                    		<div class="r3_counter_box">
                                                <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                                                <div class="stats">
                                                  <a href="remodeling_view.php"><h5><strong>View Remodeling Projects</strong></h5></a>

                                                </div>
                                            </div>
                                    	</div>




        	<div class="clearfix"> </div>
      </div>
      <div class="col_1">



<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',

	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
	      <!-- map -->
<link href="includes/css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="includes/js/jquery.vmap.js"></script>
<script src="includes/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="includes/js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
       </div>
      <br><br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br> 
    <div class="copy">
            <p>Copyright &copy; 2016 SAKTHI BUILDERS. All Rights Reserved | Design by <a href="http://pepiras.com/" target="_blank">Pepiras</a> </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="includes/js/bootstrap.min.js"></script>
</body>
</html>
