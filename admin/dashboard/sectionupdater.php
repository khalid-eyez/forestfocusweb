<?php
session_start();
include_once('functions.php');
$module=base64_decode(urldecode($_SESSION['module']));
//$section=$_SESSION['updatesection'];
$sectiondata=unserialize(base64_decode(urldecode($_GET['section'])));

$insert=sectionupdate($_POST,$sectiondata['sectionID']);

//print $insert; return false;

if($insert==false)
{
    $_SESSION['error']="An error Occured while updating section, please try again";
    header("location:updatesection.php?section=".$_GET['section']."&&module=".$_SESSION['module']) ;
    return false;
}

$imagesaved=imagesSave($_FILES,$insert);
//print $imagesaved; return false;

if($imagesaved==0 && $insert!=false)
{
    $_SESSION['message']="Section updated successfully";
    header("location:updatesection.php?section=".$_GET['section']."&&module=".$_SESSION['module']) ; 
}
    



?>