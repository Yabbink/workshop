<?php
include "DB.php";
class User
{
    private $db;

    public function __construct()
    {
       $this->db = new DB();
    }

    public function db_connect()
    {
        $db2 = $this->db = new mysqli('localhost', 'root', '', 'gc_festival');
        return $db2;
    }
    public function selecteerUser($id)
    {
        $user = $this->db->query("SELECT * FROM users where id = '$id'");
        return $user;
    }
    public function selecteerUser2()
    {
        $users = $this->db->query("SELECT * FROM users");
        return $users;
    }
    public function saveUser($firstName, $lastName, $email, $password)
    {
        $user = $this->db->query("INSERT INTO users(firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')");
        return $user;
    }
    public function updateUser($firstName, $lastName, $email, $password, $id)
    {
        $user = $this->db->query("UPDATE users SET firstName = '$firstName', lastName = '$lastName', email = '$email', password = '$password' WHERE id = '$id'");
        return $user;
    }
    public function deleteUser($id)
    {
        $user = $this->db->query("DELETE FROM users WHERE  id = '$id'");
        return $user;
    }
}

?>
