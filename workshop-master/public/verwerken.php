<?php
    include_once "header.php";
    require_once "../src/databaseFunctions.php";

    if(isset($_POST['opslaan']))
    {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $prijs = $_POST['prijs'];
        $prijs2 = (double)$prijs;
        $opmerking = $_POST['opmerking'];

        $query = "INSERT INTO bestelling(firstName, lastName, email, prijs, opmerking) VALUES('$voornaam', '$achternaam', '$email', '$prijs2', '$opmerking')";

        $result = db_insertData($query);
        if ($result)
        {
            echo "<br>Klant is toegevoegd!!";
        }

        echo "<br><br>";
        echo "<a href=\"registreren.php\">Nog een toevoegen</a>";
        echo "<br><br>";
        echo "<a href=\"weergeven.php\">Klanten weergeven</a>";

    }
    include_once "footer.php"
?>