<?php
namespace Admin;
class Dbconnect
{

  public $dbname="forestfo_forestfocusnew";
  public $username='forestfo_admin';
  public $password='forestDB@2022';


  public function connect()
  {
    return new \PDO('mysql:host=localhost;dbname='.$this->dbname,$this->username,$this->password);
  }


}

?>