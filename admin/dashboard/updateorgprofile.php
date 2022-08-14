<?php
session_start();
include_once('functions.php');
$insert=updateprofile($_POST);

if($insert==false)
{
    $_SESSION['error']="An error Occured, please try again";
    return false;
}


if($insert!=false)
{
    $_SESSION['message']="updated successfully";
    header("location:updateprofil.php") ; 
}
    



?>