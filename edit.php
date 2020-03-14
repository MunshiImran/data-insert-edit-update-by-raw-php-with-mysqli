<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Raw php with mysqli data delete & insert</title>
</head>
<body>
   <?php 
    
    if(isset($_REQUEST["editId"])){
        
        $editId = $_REQUEST["editId"];
    
    
    $selectInfo = "SELECT * FROM info WHERE ID=$editId";
    
    $runInfo = mysqli_query($connect,$selectInfo);

    while($getInfo = mysqli_fetch_array($runInfo)){ ?>
       
       <form action="update.php" method="post">
       <input type="text" name="fname" value="<?php echo $getInfo['fname'] ; ?>" placeholder="First Name">
       <br>
       <br>
       <input type="text" name="lname" value="<?php echo $getInfo['lname'] ; ?>" placeholder="Last Name">
       <br>
       <br>
       <input type="text" name="mail" value="<?php echo $getInfo['mail'] ; ?>" placeholder="E-Mail">
       <br>
       <br>
       <input type="text" name="phone" value="<?php echo $getInfo['phone'] ; ?>" placeholder="Phone NO.">
       <br>
       <br>
       <input type="hidden" name="editId" value="<?php echo $editId ; ?>">
       <input type="password" name="password" value="<?php echo $getInfo['password'] ; ?>" placeholder="password">
       <br>
       <br>
       <input type="submit" value="Update" name="update">
   </form>
        
    <?php } }
    
    ?>
   
   
   
  
    
</body>
</html>