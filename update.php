<?php
require_once("config.php");

if(isset($_REQUEST["update"])){
    
    $editId = $_REQUEST["editId"];
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $mail = $_REQUEST["mail"];
    $phone = $_REQUEST["phone"];
    $password = $_REQUEST["password"];
    
    
    
    $updateInfo = "UPDATE info SET fname='$fname',lname='$lname',mail='$mail',phone='$phone',password='$password' WHERE ID=$editId";
    
    $runUpdate = mysqli_query($connect,$updateInfo);
    
    if($runUpdate=true){
        header("location: index.php?updated");
    }
    
}

?>

