<?php
#create connection to MySQL database
$servername="localhost";
$username="root";
$password="";
$dbname="revenue";

$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
 die("error".$con->connect_error);
}
else{
 echo "connected";
}

#create table
$sql="CREATE TABLE users(fname VARCHAR(100),
                         lname VARCHAR(100),
                         designation VARCHAR(100),
                         email VARCHAR(100),
                         phone INT(100),
                         area VARCHAR(100))";

if($con->query($sql)==TRUE){
 echo "table created successfully";
}
else{
 die("error".$con->error);
}
?>