<?php
#create a connection 
$servername="localhost";
$username="root";
$password="";

$con=new mysqli($servername,$username,$password);
if($con->connect_error){
 die("not connected".$con->connect_error);
}
else{
// echo "connected";
}

#create a database
$sql="CREATE DATABASE revenue";
if($con->query($sql)==TRUE){
 echo "Database created";
}
else{
 die("error".$con->error);
}

$con->close();
?>