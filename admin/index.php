<?php
ob_start();
session_start();
include 'includes/dbconfig.php';

// it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }
 ?>
<!doctype html>
<html>
<head>
<title>Admin | Login</title>

<!--/*Angular JS form validation js include*/-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Unique Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- /font files  -->
<!-- css files -->
<link href="includes/css/animate-custom.css" rel="stylesheet" type="text/css" media="all" />
<link href="includes/css/style1.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body ng-app="">
<div class="header">
	<h1>Admin Login Form</h1>
</div>
<div class="content">
	<section>
        <div id="container_demo" >
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
				<div id="login" class="animate form">
					<div class="content-img">
						<img src="includes/images/profile.png" alt="img" class="w3l-img">
					</div>
                    <form name="frm" action="login.php" autocomplete="on" method="post">

                        <p>
							<label for="username" class="uname" data-icon="u" > Username  </label>
                            <input id="username" name="username" required="required" ng-model="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" placeholder = "Username"/>
<p style="color:red;" ng-show="frm.username.$touched && frm.username.$invalid"><img height="20" width="20" src="includes/images/error.png">&nbsp;Enter Username</p>
											  </p>
						<p>
                            <label for="password" class="youpasswd" data-icon="p"> Password  </label>
							<input id="password" name="password" required="required" type="password" ng-model="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" placeholder = "Password" />
                      <p style="color:red;" ng-show="frm.password.$touched && frm.password.$invalid"><img height="20" width="20" src="includes/images/error.png">&nbsp;Enter Password</p>
										  </p>
                        <p class="keeplogin">
							<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
							<label for="loginkeeping">Keep me logged in</label>
						</p>
                        <p class="login button">
                            <input type="submit" value="Login" />
						</p>

                    </form>
                </div>

			</div>
        </div>
    </section>
</div>

</body>
</html>
