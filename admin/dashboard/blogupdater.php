<?php
session_start();
include_once('functions.php');
//print_r($_FILES);return true;
$blogdata=unserialize(base64_decode(urldecode($_GET['blog'])));

$insert=blogupdate($_POST,$_FILES,$blogdata['blogID']);

//print $insert; return false;

if($insert==false)
{
    $_SESSION['error']="An error Occured while updating blog, please try again";
    header("location:updatepost.php?post=".$_GET['blog']) ;
    return false;
}

if($insert!=false)
{
    $_SESSION['message']="post updated successfully";
    header("location:updatepost.php?post=".$_GET['blog']) ;
}
    



?>