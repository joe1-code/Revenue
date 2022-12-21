<?php
//create variables for connection to Appache server,mysql database
$servername="localhost";
$username="root";
$password="";
$dbname="revenue";

//creating connection to MySQL database.
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
 die("could not connect".$con->connect_error);
}
else{
 echo "connected";
}

//close a connection





?>