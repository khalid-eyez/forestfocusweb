<?php
session_start();
include_once('functions.php');

//$section=$_SESSION['updatesection'];
$sectiondata=unserialize(base64_decode(urldecode($_GET['section'])));

$insert=postsectionupdate($_POST,$sectiondata['sectionID']);

//print $insert; return false;

if($insert==false)
{
    $_SESSION['error']="An error Occured while updating section, please try again";
    header("location:updatepostsection.php?section=".$_GET['section']) ;
    return false;
}

$imagesaved=postimagesSave($_FILES,$insert);
//print $imagesaved; return false;

if($imagesaved==0 && $insert!=false)
{
    $_SESSION['message']="Section updated successfully";
    header("location:updatepostsection.php?section=".$_GET['section']) ;
}
    



?>