<?php
    require('../src/databaseFunctions.php');
    print_r($_POST);

    if(isset($_POST['opslaan']))
    {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];

        $query = "INSERT INTO werknemer(voornaam, achternaam) VALUES('$voornaam', '$achternaam')";

        $result = execute_query($query);
        echo "<br>" . $result;
        if ($result)
        {
            echo "<br>Werknemer is toegevoegd!!";
        }

        echo "<br><br>";
        echo "<a href=\"werknemerRegistreren.php\">Nog een werknemer toevoegen</a>";

    }
?>