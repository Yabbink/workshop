<?php
    require('../src/databaseFunctions.php');
    print_r($_POST);

    if(isset($_POST['opslaan']))
    {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];

        $query = "INSERT INTO klanten(voornaam, achternaam) VALUES('$voornaam', '$achternaam')";

        $result = execute_query($query);
        echo "<br>" . $result;
        if ($result)
        {
            echo "<br>Klant is toegevoegd!!";
        }

        echo "<br><br>";
        echo "<a href=\"registreren.php\">Nog een toevoegen</a>";
        echo "<br><br>";
        echo "<a href=\"weergeven.php\">Klanten weergeven</a>";

    }
?>