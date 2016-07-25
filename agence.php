<?php
session_start(); // démarrage de la session
// obligatoire pour récupérer les variables de session stockées
$_SESSION['voyage'] = $_POST['voyage'];
$_SESSION['excursion'] = $_POST['excursion'];

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['choix'] = $_POST['choix'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
  <title>Agence</title>
</head>
<body>
  <?php

// Récupération des données

$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$choix = $_POST['choix'];
$suite = $_POST['suite'];

if ($choix == 'monvoyage'){

// Affichage des données du choix destination Voyage -

echo "<div class='page2'>";
  echo '<h2> VOYAGE </h2>';
  echo '<form method="post" action="recapitulatif.php">';
    echo '<fieldset>';
        echo '<h3 align="center"><b> Choix voyage et nombre de personnes</b></h3>';
          echo '<select name="voyage">';
          echo '<option value="voyage1">Les caraîbes-le pied, au prix de 1500 Euro par personne</option>';
          echo '<option value="voyage2">Iles des oiseaux, au prix de 2000 Euro par Personne</option>';
          echo '<option value="voyage3">Pays de l entrée du paradis, au prix de 1800 Euro par Personne</option>';
          echo '</select><br>';
          echo '<input type="number" min=0 required name="nombreperso" /><br>';
          echo '<input type="submit" value="estimation" name="estimation" />';
      echo '</fieldset>';
  echo '</form>';
echo "</div>";
echo '<div class="defilement">';
echo '<br><br><br>';
echo "<marquee><h2>LES &nbsp;&nbsp MEILLEURS &nbsp;&nbsp DESTINATIONS &nbsp;&nbsp POUR &nbsp;&nbsp VOTRE &nbsp;&nbsp JOIX &nbsp;&nbsp DE &nbsp;&nbsp VIVRE</marquee></h2>";
echo '</div>';
}
else
{
// Affichage des données du choix destination Excursion-
echo "<div class='page22'>";
  echo '<h2> EXCURSION<h2>';
    echo '<form method="post" action="recapitulatif.php">';
      echo '<fieldset>';
      echo '<h5 align="center"><b> Choix excursion et nombre de personnes</b></h5>';
          echo '<select name="excursion">';
              echo '<option value="excursion1">Visite du Pandemoinium, au prix de 100 Euro par personne</option>';
              echo '<option value="excursion2">Visite des Antilles, au prix de 400 Euro par personne</option>';
              echo '<option value="excursion3">Visite des musée de new york, au prix de 500 Euro par Personne</option>';
              echo '<option value="excursion4">Visite de la foêt des dieu, au prix de 350 Euro par personne</option>';
          echo '</select><br>';
          echo '<input type="number" min=0 required name="nombreperso" value="nbrevoyage" /><br>';
          echo '<input type="submit" value="estimation" name="estimation" />';
      echo '</fieldset>';
  echo '</form>';
echo "</div>";
echo '<div class="defilement">';
echo '<br><br><br>';
echo "<marquee><h2>LES &nbsp;&nbsp MEILLEURS &nbsp;&nbsp EXCURSIONS &nbsp;&nbsp POUR &nbsp;&nbsp VOTRE &nbsp;&nbsp DETENTE</marquee></h2>";
echo '</div>';
}
?>

</body>
</html>
