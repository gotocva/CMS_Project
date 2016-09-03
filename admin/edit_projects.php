<?php
ob_start ();
session_start ();
if (isset ( $_SESSION ['user'] ) == "") {
	header ( "Location: index.php" );
	exit ();
}
include 'includes/dbconfig.php';

$id = $_GET ['id'];
$table = $_GET ['table'];

if ($table == "testimonial") {
	edit ( $id, $table );
}

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
<!-- Custom CSS -->
<link href="includes/css/style.css" rel='stylesheet' type='text/css' />
<link href="includes/css/custom.css" rel="stylesheet">
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

				<h3>Edit Project</h3>

				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" name="frm" action="" method="post"
							enctype="multipart/form-data">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="title"
										id="title" placeholder="<?php echo $rows['title']; ?>">
								</div>

							</div>

							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Title
									Content</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="titlecontent"
										id="titlecontent"
										placeholder="<?php echo $rows['titlecontent']; ?>">
								</div>

							</div>

							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Services</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="services"
										id="services" placeholder="<?php echo $rows['services']; ?>">
								</div>

							</div>

							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Service
									Content</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="servicescontent"
										id="servicescontent"
										placeholder="<?php echo $rows['servicescontent']; ?>"> <input
										type="hidden" name="id" value="<?php echo $id?>"> <input
										type="hidden" name="table" value="<?php echo $table?>">
								</div>
							</div>

							<div class="form-group">


								<br> <br>
								<div class="col-sm-8 col-sm-offset-">
									<span><a href="javascript:void(0);" class="add">Add More</a></span><br>
									<input class="btn-success btn" class="files" name="file[]"
										type="file" multiple="multiple"><br>


								</div>


								<div class="contents"></div>
								<br> <br>
								<div class="col-sm-8 col-sm-offset-">
									<input class="btn-success btn" type="submit" class="submit"
										value="submit" name="submit" /> <input class="btn-success btn"
										type="Reset" class="reset" name="reset" />
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









   <?php

			if (isset ( $_POST ['submit'] )) {

				$title = $_POST ['title'];
				$titlecontent = $_POST ['titlecontent'];
				$services = $_POST ['services'];
				$servicescontent = $_POST ['servicescontent'];
				$id = $_POST ['id'];
				$table = $_POST ['table'];

				// var_dump($id);
				// var_dump($table);
				if ($title == "") {

					$sql = "UPDATE  $table SET  titlecontent = '$titlecontent', services = '$services', servicescontent = '$servicescontent' WHERE id = $id";
					// var_dump($sql);
					$quw = mysqli_query ( $conn, $sql );
				} else if ($titlecontent == "") {
					$sql = "UPDATE  $table SET title = '$title',  services = '$services', servicescontent = '$servicescontent' WHERE id = $id";
					// var_dump($sql);
					$quw = mysqli_query ( $conn, $sql );
				} else if ($services == "") {
					$sql = "UPDATE  $table SET title = '$title',   servicescontent = '$servicescontent' WHERE id = $id";
					// var_dump($sql);
					$quw = mysqli_query ( $conn, $sql );
				} else if ($servicescontent == "") {
					$sql = "UPDATE  $table SET title = '$title',  services = '$services',  WHERE id = $id";
					// var_dump($sql);
					$quw = mysqli_query ( $conn, $sql );
				} else {
					$sql = "UPDATE  $table SET title = '$title', titlecontent = '$titlecontent', services = '$services', servicescontent = '$servicescontent' WHERE id = $id";
					// var_dump($sql);
					$quw = mysqli_query ( $conn, $sql );
				}

				$j = 0; // Variable for indexing uploaded image

				$target_path = "uploads/"; // Declaring Path for uploaded images
				for($i = 0; $i < count ( $_FILES ['file'] ['name'] ); $i ++) { // loop to get individual element from the array

					$imga = array (
							"img1",
							"img2",
							"img3",
							"img4"
					);

					var_dump ( $imga [1] );

					$imgb = $imga [$i];

					$validextensions = array (
							"jpeg",
							"jpg",
							"png"
					); // Extensions which are allowed
					$ext = explode ( '.', basename ( $_FILES ['file'] ['name'] [$i] ) ); // explode file name from dot(.)
					$file_extension = end ( $ext ); // store extensions in the variable
					$pat = "http://localhost/cms/admin/";

					$target_path = $target_path . md5 ( uniqid () ) . "." . $ext [count ( $ext ) - 1]; // set the target path with a new name of image
					$sad = $pat . $target_path;
					$j = $j + 1; // increment the number of uploaded images according to the files in array

					if (($_FILES ["file"] ["size"] [$i] < 100000000) && // Approx. 100kb files can be uploaded.
in_array ( $file_extension, $validextensions )) {
						if (move_uploaded_file ( $_FILES ['file'] ['tmp_name'] [$i], $target_path )) { // if file moved to uploads folder
							echo $j . ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
							echo $sad;
							$sql = "UPDATE $table SET $imgb = '$sad' WHERE id = '$id'";
							$sqa = mysqli_query ( $conn, $sql );
							echo "<br>";
							header ( 'Refresh: 0; URL = home.php' );
						} else { // if file was not moved.
							echo $j . ').<span id="error">please try again!.</span><br/><br/>';
						}
					} else { // if file size and file type was incorrect.
						echo $j . ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
					}
				}
			}

			// header('Refresh URL = ');
			?>











    <!-- /#wrapper -->
	<!-- Nav CSS -->

	<!-- Metis Menu Plugin JavaScript -->
	<script src="includes/js/metisMenu.min.js"></script>
	<script src="includes/js/custom.js"></script>

</body>
</html>
