<?php
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
 //echo "connected";
}

$sql="CREATE TABLE deposit(depositId int NOT NULL AUTO_INCREMENT,
                           depositor VARCHAR(100),
                           account VARCHAR(100),
                           branch VARCHAR(100),
                           phone VARCHAR(100),
                           amount INT(100),
                           depositdate DATE,
                           PRIMARY KEY(depositId)
                           )";

if($con->query($sql)==TRUE){
 echo "table created";
}
else{
 die("error".$con->error);
}

?>