


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="tra.css">
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title> 

</head>
<body>

    <h2></h2>
    
    <Table id="tab1">
    <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Designation</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Area</th>
    </tr>
    
<?php
  $servername = "localhost";
 $user = "root";
 $passwd = "";
 $db = "revenue";

 $conn = new mysqli($servername, $user, $passwd, $db);
 if ($conn -> connect_error) {
  die("error".$conn -> connect_error);
 }
 else {
  //echo "connected";
 }

 $sql = "SELECT * FROM users";
 $result = $conn -> query($sql);

 if ($result -> num_rows > 0) {
  while ($row = $result -> fetch_assoc()) {
    
  
 ?>
 <tr>
    
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['lname'];?></td>
    <td><?php echo $row['designation'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['area'];?></td>
    </tr>
    <?php

    }}?>
    </Table>

</body>
</html>
