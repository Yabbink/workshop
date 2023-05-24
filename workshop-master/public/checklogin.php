<?php
include_once "User.php";
include_once "UserAuthenticator.php";
session_start();
$gebruiker = new User();
$user = new UserAuthenticator();
$conn = $gebruiker->db_connect();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE admin = 1 AND email='" . $email . "' AND password='" . $password . "'";
    $result = $conn->query($sql);
//    $user2 = $user->authenticateUser($email,$password);

    if ($result->num_rows > 0) {
        //output data of each row
        $row = $result->fetch_array();
        // echo $row['firstName'] . " " . $row['lastName'];

        // // nu resultaat opslaan in de sessie variabele (array met resultaat)
        print_r($row);
        $_SESSION['user'] = $row;
        header("location: index.php");
        $email = $_SESSION['email'];
    } else {
      echo "0 results";
      header("location: login.php");
      $_SESSION['message'] = "Invalid username or password";
    }
}

$conn->close();