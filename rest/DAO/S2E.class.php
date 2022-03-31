<?php

class s2eDao {
  private $conn;
  /* constructor */
  public function __contruct(){
    $servername = "localhost";
    $username = "root";
    $password = "ervajekralj";

    try {
      $this->conn = new PDO("mysql:host=$servername;dbname=stake2earndb", $username, $password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e)
    throw $e;
    }
    
  }
}

?>
