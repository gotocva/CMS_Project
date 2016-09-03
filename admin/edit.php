<?php
ob_start ();
session_start ();
// include 'includes/dbconfig.php';

// it will never let you open index(login) page if session is set
// ob_start();
// session_start();
if (isset ( $_SESSION ['user'] ) == "") {
	header ( "Location: index.php" );
	exit ();
}
?>
<?php

include 'includes/dbconfig.php';

$id = $_GET ['id'];
$table = $_GET ['table'];

$sql = "SELECT * FROM $table  WHERE id='$id'";
$sqa = mysqli_query ( $conn, $sql );
$rows = mysqli_fetch_assoc ( $sqa );

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="includes/css/bootstrap.min.css" rel='stylesheet'
	type='text/css' />
<link href="includes/css/custom.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="includes/css/style.css" rel='stylesheet' type='text/css' />
<link href="includes/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="includes/js/jquery.min.js"></script>
<!----webfonts--->
<link
	href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'
	rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="includes/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="top1 navbar navbar-default navbar-static-top"
			role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
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
						<li><a href="home.php"><i class="fa fa-indent nav_icon"></i>Dashboard</a>
						</li>
						<li><a href="#"><i class="fa fa-indent nav_icon"></i>Projects</a>
							<ul class="nav nav-second-level">
								<li><a href="projects.php">Add Projects</a></li>
								<li><a href="interior_view.php">View Interior Projects</a></li>
								<li><a href="exterior_view.php">View Exterior Projects</a></li>
								<li><a href="remodeling_view.php">View Remodeling Project</a></li>
							</ul></li>
						<li><a href="testimonial.php"><i class="fa fa-indent nav_icon"></i>Testimonial</a>
						</li>
						<li><a href="change_password.php"><i class="fa fa-indent nav_icon"></i>Change
								Password</a></li>
					</ul>

				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
	</div>
	<div id="page-wrapper">
		<div class="graphs">
			<div class="xs">

				<h3>Add Testimonial</h3>

				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" name="frm"
							action="edit_testimonial.php" method="post">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Author</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="author"
										id="author" placeholder="<?php echo $rows['author'];?>">
								</div>

							</div>

							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Testimonial</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="content"
										id="content" placeholder="<?php echo $rows['content']; ?>"> <input
										type="hidden" name="id" value="<?php echo $id?>"> <input
										type="hidden" name="table" value="<?php echo $table?>">

								</div>
							</div>


							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<button type="submit" class="btn-success btn">Update</button>
									<button type="reset" class="btn-default btn">Reset</button>

								</div>
							</div>
							<br> <br>
							<div class="panel-footer"></div>
						</form>
					</div>
				</div>
				<div class="copy_layout">
					<p>
						Copyright © 2016 SAKTHI BUILDERS. All Rights Reserved | Design by
						<a href="http://pepiras.com/" target="_blank">Pepiras</a>
					</p>
				</div>
			</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- Nav CSS -->

	<!-- Metis Menu Plugin JavaScript -->
	<script src="includes/js/metisMenu.min.js"></script>
	<script src="includes/js/custom.js"></script>

</body>
</html>
