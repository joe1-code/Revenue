<?php
include 'connection.php';
$sql="SELECT id FROM registers";
$result=$con->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){
 // echo $row['id'];
 }
}
$valueID=$_REQUEST['delete'];
//echo $valueID;

$del="DELETE FROM registers WHERE id='$valueID'";
if($con->query($del)==TRUE){
 header("location:select.php");
}
else{
 die("not deleted".$con->error);
}


?>