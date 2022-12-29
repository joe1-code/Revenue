<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="test.css">
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
#tab{
  border: 1px solid black;
}
 </style>
</head>
<body>
 <table id='tab'>
  <tr>
    
   <th>First Name</th>
   <th>Last Name</th>
   <th>Date</th>
   <th>Occupation</th>
   <th>Email</th>
  </tr>
  
   <?php
    include 'test.php';
    $sql="SELECT * FROM customer";
    $result=$con->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
     ?>
      
           <tr>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['lname'];?></td>
            <td><?php echo $row['dates'];?></td>
            <td><?php echo $row['occupation'];?></td>
            <td><?php echo $row['email'];?></td>
           </tr>
     <?php       
      }
    }
  ?>

  
  
 </table>
</body>
</html>