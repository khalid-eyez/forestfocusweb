<?php
namespace Admin;
include_once("../vendor/autoload.php");
include('Dbconnect.php');
use PHPAuth;

$dbconnect=(new Dbconnect)->connect();
$config=new PHPAuth\Config($dbconnect);
$auth=new PHPAuth\Auth($dbconnect,$config);

$email=$_POST['email'];
$pwd=$_POST['password'];

$logged=$auth->login($email,$pwd);

if($logged['error']==false)
{
    header('location:dashboard/');
}
else
{
    session_start();
    $_SESSION['error']=$logged['message'];
    header('location:../');
}






?>