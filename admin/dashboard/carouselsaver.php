<?php
session_start();
include_once('functions.php');


$imagesaved=carouselsave($_FILES,$_POST['caption']);

if($imagesaved==0)
{
    $_SESSION['message']="Carousel Image uploaded successfully";
    header("location:carousel.php"); 
}
    



?>