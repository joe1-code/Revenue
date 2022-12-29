<?php
include 'test.php';

$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];

$sql="SELECT password FROM customer WHERE email='$user'";
$result=$con->query($sql);

if($result->num_rows>0){
 while($row=$result->fetch_assoc()){
  $row['password'];

 if(!password_verify($pass,$row['password'])){
 echo "wrong credentials";
}
else{
 echo "login successfully";
}
}
 }






//if(!password_verify())



?>