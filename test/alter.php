<?php
include 'test.php';
$hash=password_hash('anna123',PASSWORD_DEFAULT);
$sql="UPDATE customer SET fname='anna',email='anna@hotmail.com',password='$hash' WHERE id='2'";
if($con->query($sql)==TRUE){
 echo "table updated";
}
else{
 die("could not update".$con->error);
}



?>