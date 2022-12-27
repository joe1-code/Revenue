<?php
include '../../connection.php';

$Dname=$_REQUEST['depositor'];
$Account=$_REQUEST['account'];
$Branch=$_REQUEST['branch'];
$Phone=$_REQUEST['phone'];
$Amount=$_REQUEST['amount'];
$Ddate=$_REQUEST['depositdate'];

#create user id
$uid=uniqid();

$sql="INSERT INTO deposit(depositor,account,branch,phone,amount,depositdate,uid)
                    VALUES('$Dname','$Account','$Branch','$Phone','$Amount','$Ddate','$uid')";

if(mysqli_query($con,$sql)){
 header("location:deposit.html");
}
else{
 echo "error occured".$mysqli_error;
}


?>