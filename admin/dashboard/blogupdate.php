<?php
session_start();
include_once('functions.php');
$imagesaved=updateblog($_FILES);

if($imagesaved==0)
{
    $_SESSION['message']="Blog updated successfully";
    header("location:updateblog.php") ; 
}
    



?>