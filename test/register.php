<?php
#create a connection
include 'test.php';

$firstname=$_REQUEST['fname'];
$lastname=$_REQUEST['lname'];
$date=$_REQUEST['dates'];
$occupations=$_REQUEST['occupation'];
$mail=$_REQUEST['email'];
$passcode=$_REQUEST['password'];

$hash=password_hash($passcode,PASSWORD_DEFAULT);

$sql="INSERT INTO customer(fname,lname,dates,occupation,email,password)
                  VALUES('$firstname','$lastname','$date','$occupations','$mail','$hash')";

if(mysqli_query($con,$sql)){
 echo "welcome";
}
else{
 echo "error".$mysqli_error;
}


?>