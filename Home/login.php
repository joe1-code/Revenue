<?php
include '../connection.php';

$user=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];

$sql="SELECT passcode FROM registers WHERE email='$user'";
$result=$con->query($sql);

if($result->num_rows>0){
 while($row=$result->fetch_assoc()){
  //echo $row['passcode'];
  if(!password_verify($pass,$row['passcode'])){
  header("location:login.html");
  }
  else{
   header("location:../Dashboard/Home.html");
  }
  
 }
}

?>