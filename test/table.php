<?php
include 'test.php';

#creating table in a database test
$sql="CREATE TABLE customer(id INT NOT NULL AUTO_INCREMENT,
                            fname VARCHAR(100),
                            lname VARCHAR(100),
                            dates DATE,
                            occupation VARCHAR(100),
                            email VARCHAR(100),
                            password VARCHAR(100),
                            PRIMARY KEY(id))";

if($con->query($sql)==TRUE){
 echo "table created";
}
else{
 die("table not created".$con->error);
}
?>