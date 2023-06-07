<?php
include_once "../src/databaseFunctions.php";
include_once "header.php";
session_start();
//bestellingen ophalen
$bestellingen = db_getData("SELECT * FROM bestelling");
?>
<div class="page beheer">
    <div class="container">
        <h1>Producten</h1>
        <div class="bestellingen">
            <table>
                <tr>
                    <th>ID</th>
                    <th>VOORNAAM</th>
                    <th>ACHTERNAAM</th>
                    <th>OPMERKING</th>
                    <th>PRIJS</th>
                </tr>
                <?php foreach($bestellingen as $bestelling){ ?>
                    <tr>
                        <td><?php echo $bestelling['klantId']; ?></td>
                        <td><?php echo $bestelling['firstName']; ?></td>
                        <td><?php echo $bestelling['lastName']; ?></td>
                        <td><?php echo $bestelling['opmerking']; ?></td>
                        <td><?php echo $bestelling['prijs']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
