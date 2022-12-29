<?php
#create connection between apache server and php script
include 'test.php';

#create a database.
$sql="CREATE DATABASE test";
if($con->query($sql)==TRUE){
 echo "db created";
}
else{
 die("not created db".$con->error);
}


?>