<?php
include 'connection.php';

$sql="ALTER TABLE registers ADD COLUMN pictures VARCHAR(100) NOT NULL";
//$sql="DELETE FROM users WHERE phone='800'";
//$sql="DROP TABLE users";
if($con->query($sql)==TRUE){
 //echo "table dropped";
 echo "column added";
 
}
else{
 die("not added".$con->error);
}



?>