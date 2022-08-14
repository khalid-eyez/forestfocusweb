<?php
session_start();
include_once('functions.php');
$module=base64_decode(urldecode($_GET['module']));


$imagesaved=updatemoduleback($_FILES,$module);

if($imagesaved==0)
{
    $_SESSION['message']="Module updated successfully";
    header("location:updateModule.php?module=".$_GET['module']) ; 
}
    



?>