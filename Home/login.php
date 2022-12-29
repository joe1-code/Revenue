<?php
session_start();

include '../connection.php';

$user=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];

$sql="SELECT passcode,id FROM registers WHERE email='$user'";
$result=$con->query($sql);

if($result->num_rows>0){
 while($row=$result->fetch_assoc()){
  //echo $row['passcode'];
  //echo $row['id'];
 
  if(!password_verify($pass,$row['passcode'])){
  echo $_SESSION['isloged'];
  echo $_SESSION['username'];
   //header("location:login.html");
  }
  else{
   $_SESSION['isloged']='true';
   $_SESSION['username']=$user;
  

  header("location:../Dashboard/Home.php");
  }
  
 }
}

?>