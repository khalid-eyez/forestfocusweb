<?php
session_start();
include_once('functions.php');


$imagesaved=gallerySave($_FILES);

if($imagesaved==0)
{
    $_SESSION['message']="Image(s) uploaded successfully";
    header("location:gallerypage.php"); 
}
    



?>