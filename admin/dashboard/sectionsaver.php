<?php
session_start();
include_once('functions.php');
$module=base64_decode(urldecode($_GET['module']));
$insert=sectionsave($_POST,$module);

if($insert==false)
{
    $_SESSION['error']="An error Occured while creating section, please try again";
    return false;
}

$imagesaved=imagesSave($_FILES,$insert);

if($imagesaved==0 && $insert!=false)
{
    $_SESSION['message']="Section created successfully";
    header("location:newsection.php?module=".$_GET['module']) ; 
}
    



?>