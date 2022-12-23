<?php
$servername="localhost";
$username="root";
$password="";
$dbname="revenue";

$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
 die("error".$con->connect_error);
}
else{
//echo "connected";
}

$firstname=$_REQUEST['fname'];
$lastname=$_REQUEST['lname'];
$design=$_REQUEST['designation'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$area=$_REQUEST['area'];
$pass=$_REQUEST['passcode'];

$hash=password_hash($pass,PASSWORD_DEFAULT);
$sql="INSERT INTO registers(fname,lname,designation,email,phone,area,passcode) 
VALUES('$firstname','$lastname','$design','$email','$phone','$area','$hash')";
if(mysqli_query($con,$sql)){
 echo "your data are submitted";
}
else{
   "could not submit".$mysqli_error;
}
$con->close();
?>