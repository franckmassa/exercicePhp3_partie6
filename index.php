<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <p>
            <?php
//Condition pour vérifier l'existence des paramètres
            if (!empty($_GET['startDate']) && !empty($_GET['endDate'])) {
                //Affichage des paramètres
                echo $_GET['startDate'] . ' - ' . $_GET['endDate'];
            } else {
                echo 'Il manque un paramètre';
            }
            ?>
        </p>
    </body>
</html>