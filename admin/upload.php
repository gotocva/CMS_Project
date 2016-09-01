<?php
ob_start();
session_start();
include 'includes/dbconfig.php';
 if ( isset($_SESSION['user'])=="" ) {
  header("Location: index.php");
  exit;
 }
if (isset($_POST['submit'])) {

  $title = $_POST['title'];
  $titlecontent = $_POST['titlecontent'];
  $services = $_POST['services'];
  $servicescontent = $_POST['servicescontent'];
  $table = $_POST['table'];

  $sql = "INSERT into $table (title, titlecontent, services, servicescontent) values ('$title','$titlecontent','$services','$servicescontent')";

  $quw = mysqli_query($conn,$sql);
  $id = $conn->insert_id;
    $j = 0; //Variable for indexing uploaded image

  $target_path = "uploads/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

$imga = array("img1", "img2", "img3", "img4");

var_dump($imga[1]);

$imgb = $imga[$i];


        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.)
        $file_extension = end($ext); //store extensions in the variable
        $pat = "http://localhost/cms/admin/";


    $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
      $sad = $pat.$target_path;
        $j = $j + 1;//increment the number of uploaded images according to the files in array

    if (($_FILES["file"]["size"][$i] < 100000000) //Approx. 100kb files can be uploaded.
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {//if file moved to uploads folder
                echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
                echo $sad;
                $sql = "UPDATE $table SET $imgb = '$sad' WHERE id = '$id'";
                $sqa = mysqli_query($conn,$sql);
                echo "<br>";
            } else {//if file was not moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {//if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
}
header('Refresh: 0; URL = home.php');
//header('Refresh URL = ');
?>
