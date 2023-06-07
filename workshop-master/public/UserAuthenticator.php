<?php
include_once "User.php";
class UserAuthenticator
{
private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function authenticateUser($email, $password)
    {
        $query = "SELECT * FROM users WHERE email='$email' and password = '$password'";
        $result = $this->db->query($query);
        $result->fetch_array();
        return mysqli_num_rows($result) >= 1;
    }
}
?>
