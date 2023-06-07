<?php
include_once "../config/db_config.php";
class DB
{
  private $conn;

  public function __construct()
  {
    $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  }

  public function query($query)
  {
    $result = $this->conn->query($query);
    return $result;
  }
}
?>
