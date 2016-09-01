<?php
ob_start();
session_start();
include 'includes/dbconfig.php';
// it will never let you open index page if session is set
 if ( isset($_SESSION['user'])!="" )
 {
  header("Location: home.php");
  exit;
 }
// Get username , password from HTML Form
$username = $_POST['username'];
$password = $_POST['password'];
$a1 = "SELECT username, password FROM admin WHERE username = '".$username."' AND  password = '".$password."'";
$q1 = mysqli_query($conn,$a1); // executes the select query
$r1 = mysqli_fetch_array($q1);
$count = mysqli_num_rows($q1); // Check number of rows present
if( $count == 1  )
{
   $_SESSION['user'] = $r1['username'];
   header("Location: home.php");
}
else
{
echo "<center><h1>Wrong Username or Password</h1></center>";
header('Refresh: 3; URL = index.php');
}
?>
