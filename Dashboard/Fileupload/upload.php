<?php
session_start();
if(!$_SESSION['isloged']==TRUE){
 echo $_SESSION['isloged'];
session_destroy();
header("location:../../../Home/login.html");
}
include '../../connection.php';
if(isset($_POST['upload'])){
 $filename=$_FILES['uploadfile']['name'];
 $tempfile=$_FILES['uploadfile']['tmp_name'];
 $folder="./img/$filename";
 $user=$_SESSION['username'];
$sql="UPDATE registers SET pictures='$filename' WHERE email='$user'";
 if(mysqli_query($con,$sql)){
  echo "successfully posted image to db";
 }
 else{
  echo "not submitted picture".$mysqli_error;
 }

if(move_uploaded_file($tempfile,$folder)){
 echo "moved picture to folder";
}
else{
 echo "did not move file to folder";
}






}








?>