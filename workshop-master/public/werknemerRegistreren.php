<?php include_once "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="werknemerVerwerken.php">
        Voornaam
        <!-- hier maak ik twee tekstvakken met een button om te kunnen registreren, en ik link hem met action naar verwerken.php -->
        <input type="text" name="voornaam"><br><br>
        Achternaam
        <input type="text" name="achternaam"><br><br>
        email
        <input type="text" name="email"><br><br>
       password
       <input type="text" name="password"><br><br>

        <input type="submit" name="opslaan" value="Opslaan">
        <input type="submit" name="annuleren" value="Annuleren">
    </form>
</body>
</html>
<?php include_once "footer.php"?>