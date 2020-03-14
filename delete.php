<?php

require_once("config.php");

$getID = $_REQUEST["id"];

$deleteData = "DELETE FROM info WHERE ID=$getID";

$runDeleteData = mysqli_query($connect,$deleteData);

if($runDeleteData==true){
    header("location: index.php?deleted");
}