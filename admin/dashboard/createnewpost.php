<?php
session_start();
include_once('functions.php');

$insert=newblogpost($_POST,$_FILES);

//print $insert; return false;

if($insert==false)
{
    $_SESSION['error']="An error Occured while creating blog, please try again";
    header("location:newpost.php") ;
    return false;
}

if($insert!=false)
{
    $_SESSION['message']="post created successfully";
    header("location:newpost.php") ;
}
    



?>