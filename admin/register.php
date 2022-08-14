<?php
namespace Admin;
include_once("../vendor/autoload.php");
include('Dbconnect.php');
use PHPAuth;

$dbconnect=(new Dbconnect)->connect();
$config=new PHPAuth\Config($dbconnect);
$auth=new PHPAuth\Auth($dbconnect,$config);

$email=$_GET['email'];
$pwd=$_GET['pwd'];
$reg=$auth->register($email,$pwd,$pwd);

print "<font size=30 color='green'><b>".$reg['message']."</b></font>";









?>