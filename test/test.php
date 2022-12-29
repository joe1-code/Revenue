<?php
#declaring the variables necessary for connection
$servername="localhost";
$username="root";
$password="";
$dbname="test";

#creating connection between apache server and the php script
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
 die("not connected".$con->connect_error);
}
else{
// echo "connected";
}



?>