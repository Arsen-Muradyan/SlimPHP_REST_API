<?php

class DB 
{ 
  private $user = "root";
  private $host = "localhost";
  private $password = "";
  private $db = "slimapp";

  public function connect() {
    $dbConnection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConnection;
  }
}
