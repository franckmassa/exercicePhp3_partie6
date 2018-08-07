<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice3</title>
</head>
<body>
  <p>
    <?php
    //Teste que les paramètres de l'url existent et affichage des dates
    if(isset($_GET['startDate']) && isset($_GET['endDate'])){
      echo $_GET['startDate'] . ' ' .$_GET['endDate'];
    }
    ?>
  </p>
</body>
</html>
