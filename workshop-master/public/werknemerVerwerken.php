<?php
    include_once "header.php";
    require_once "../src/databaseFunctions.php";

    if(isset($_POST['opslaan']))
    {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users(firstName, lastName, email, password) VALUES('$voornaam', '$achternaam', '$email', '$password')";

        $result = db_insertData($query);
        if ($result)
        {
            echo "<br>werknemer is toegevoegd!!";
        }

        echo "<br><br>";
        echo "<a href=\"registreren.php\">Nog een toevoegen</a>";
        echo "<br><br>";
        echo "<a href=\"weergeven.php\">werknemer weergeven</a>";

    }
     include_once "footer.php";
?>