<?php
include_once "User.php";
session_start();
$gebruiker = new User();
$conn = $gebruiker->db_connect();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        //output data of each row
        $row = $result->fetch_array();
        // echo $row['firstName'] . " " . $row['lastName'];

        // // nu resultaat opslaan in de sessie variabele (array met resultaat)
        print_r($row);
        $_SESSION['user'] = $row;
        header("location: login.php");
        $email = $_SESSION['email'];
    } else {
      echo "0 results";
      header("location: index.php");
      $_SESSION['message']= "Invalid username or password";
    }
}

$conn->close();