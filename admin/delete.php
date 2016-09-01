<?php
ob_start();
session_start();
 if ( isset($_SESSION['user'])=="" ) {
  header("Location: index.php");
  exit;
 }
 include 'includes/dbconfig.php';
$id = $_GET['id'];
$table = $_GET['table'];
$sql = "DELETE from $table WHERE id='$id'";
$sqa = mysqli_query($conn,$sql);
header('Refresh: 0; URL = home.php');
?>
