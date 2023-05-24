<?php
class DB
{
  private $conn;

  public function __construct()
  {
    $this->conn = new mysqli('localhost', 'root', '', 'gc_festival');
  }

  public function query($query)
  {
    $result = $this->conn->query($query);
    return $result;
  }
}
?>
