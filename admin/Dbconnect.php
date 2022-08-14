<?php
namespace Admin;
class Dbconnect
{

  public $dbname="forestfocusdb";
  public $username='root';
  public $password='';


  public function connect()
  {
    return new \PDO('mysql:host=localhost;dbname='.$this->dbname,$this->username,$this->password);
  }


}


?>