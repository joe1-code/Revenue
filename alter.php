<?php
include 'connection.php';

$sql="ALTER TABLE users ADD COLUMN passcode VARCHAR(100) NOT NULL";
if($conn->query($sql)==TRUE){
 echo "column added";
}
else{
 die("not added".$conn->error);
}



?>