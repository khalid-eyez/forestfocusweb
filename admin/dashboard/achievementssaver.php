<?php
session_start();
include_once('functions.php');


$imagesaved=achsave($_FILES,$_POST['caption']);

if($imagesaved==0)
{
    $_SESSION['message']="Successfully";
    header("location:achievements.php"); 
}
    



?>