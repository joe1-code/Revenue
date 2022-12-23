<?php
include 'connection.php';

//$sql="ALTER TABLE users ADD COLUMN passcode VARCHAR(100) NOT NULL";
//$sql="DELETE FROM users WHERE phone='800'";
$sql="DROP TABLE users";
if($con->query($sql)==TRUE){
 echo "table dropped";
 //echo "column added";
}
else{
 die("not added".$con->error);
}



?>