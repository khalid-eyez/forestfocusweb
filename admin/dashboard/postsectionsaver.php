<?php
session_start();
include_once('functions.php');

$post=base64_decode(urldecode($_GET['post']));
$insert=postsectionsave($_POST,$post);

if($insert==false)
{
    $_SESSION['error']="An error Occured while creating section, please try again";
    return false;
}

$imagesaved=postimagesSave($_FILES,$insert);

if($imagesaved==0 && $insert!=false)
{
    $_SESSION['message']="Section created successfully";
    header("location:newpostsection.php?post=".$_GET['post']) ; 
}
    



?>