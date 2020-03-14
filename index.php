<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Raw php with mysqli data delete & insert</title>
</head>
<body>
   
   
   <?php 
    if(isset($_REQUEST["action"])==true){
        echo "Data inserted";
    }
    ?>
   
   <form action="savedata.php" method="post">
       <input type="text" name="fname" placeholder="First Name">
       <br>
       <br>
       <input type="text" name="lname" placeholder="Last Name">
       <br>
       <br>
       <input type="text" name="mail" placeholder="E-Mail">
       <br>
       <br>
       <input type="text" name="phone" placeholder="Phone NO.">
       <br>
       <br>
       <input type="password" name="password" placeholder="password">
       <br>
       <br>
       <input type="submit" value="submit" name="submit">
   </form>
   
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   
   <?php
    if(isset($_REQUEST["deleted"])){
        echo "Data has been deleted";
    }
    
    ?>
   <table border="1px">
       <tr>
           <td>First Name</td>
           <td>Last Name</td>
           <td>E-Mail</td>
           <td>Phone</td>
           <td>Password</td>
           <td>Action</td>
       </tr>
          
        <?php 
       
            $showData = "SELECT * FROM info";
            $runShowData = mysqli_query($connect,$showData);
            
                if($runShowData==true){
                    while($myData = mysqli_fetch_array($runShowData)){ ?>
            <tr>
               <td><?php echo $myData["fname"];?></td>
               <td><?php echo $myData["lname"];?></td>
               <td><?php echo $myData["mail"];?></td>
               <td><?php echo $myData["phone"];?></td>
               <td><?php echo $myData["password"];?></td>
               <td><a href="edit.php?editId=<?php echo $myData["ID"]; ?>">Edit</a> | <a href="delete.php?id=<?php echo $myData["ID"]; ?>">Delete</a></td>
            </tr>
                    <?php } } ?>
        
   </table>
    
</body>
</html>