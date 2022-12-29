<?php
session_start();
if(!$_SESSION['isloged']=='true'){
session_destroy();
header("location:../Home/login.html");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="" >
  <h1>WELCOME AT TRA TAXPAYER SERVICES</h1>
  <button id="special">SPECIAL NUMBER</button>
  <button id="returns">QUARTER RETURNS</button>
  <button><a href="./Banking/deposit.html" id="bank">BANKING</a></button>
  <button id="tancis">TANCIS</button>
  <a href="../Home/logout.php">logout</a>
 </form>
<form action="./Fileupload/upload.php" method="POST" enctype="multipart/form-data" >
 <div id="pic">
    <input type="file" id="pic-upload" name="uploadfile" value="">
    <input type="text">
  </div>
  <div class="form-group">
   <button class="but" type="submit" name="upload">UPLOAD</button>
  </div>

</form>
<div id="display-image">
  <?php
  $user=$_SESSION['username'];
 include '../connection.php';
 $sql="SELECT pictures FROM registers WHERE email='$user'";
 $result=$con->query($sql);
 if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo $row['pictures'];
    ?>
 <img src=<?php echo "./Fileupload/img/".$row['pictures'];?>    
</div>

 <?php 
 }
 }

 ?>


</body>
</html>
