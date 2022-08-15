<?php
namespace Admin;
require_once("../../vendor/autoload.php");
require_once ('../Dbconnect.php');

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;


$dbh = (new Dbconnect)->connect();

$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);

if (!$auth->isLogged()) {
 header("location:../");
}

?>