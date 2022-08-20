<?php
session_start();
include_once('functions.php');

//print_r($_POST);
$insert=orgupdate($_POST);

//print $insert; return false;

if($insert==false)
{
    $_SESSION['error']="An error Occured while updating organisation details, please try again";
    header("location:organisation.php") ;
    return false;
}
else
{
    $_SESSION['message']="organisation details updated successfully";
    header("location:organisation.php") ;  
}





?>