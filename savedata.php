<?php

require_once("config.php");

if(isset($_REQUEST["submit"])){
    
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $mail = $_REQUEST["mail"];
    $phone = $_REQUEST["phone"];
    $password = $_REQUEST["password"];
    
    
}

$dataInsert = "INSERT INTO info (fname,lname,mail,phone,password) VALUES ('$fname','$lname','$mail','$phone','$password')";

$runQuery = mysqli_query($connect,$dataInsert);

if($runQuery==true){
    header("location: index.php?action=true");
}
