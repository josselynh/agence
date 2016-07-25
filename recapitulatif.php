<?php
session_start(); // démarrage de la session
// obligatoire pour récupérer les variables de session stockées
$_SESSION['voyage'] = $_POST['voyage'];
$_SESSION['excursion'] = $_POST['excursion'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
  <title>Recapitulatif</title>
</head>
<body>

  <?php
  $estimation = $_POST['estimation'];
  $nombreperso = $_POST['nombreperso'];
  $voyage = $_SESSION['voyage'];
  $excursion = $_POST['excursion'];
  $civilite = $_SESSION['civilite'];
  $nom = $_SESSION['nom'];
  $prenom = $_SESSION['prenom'];
  $choix = $_SESSION['choix'];
  $suite = $_SESSION['suite'];
  $montant = null;

  // Affichage de l'option voyage


  if ($_POST['voyage'] == "voyage1"):
    echo '<div class="affichage">';
    echo '<p> Résumé de votre demande </p>';
  $montant = $nombreperso * 1500;
  $voyage = "Les caraîbes-le pied, au prix de 1500 Euro par personne";
  echo 'Bonjour,'. ' '.$civilite. ' '.$nom. ' '.$prenom. '<br>';
  echo 'vous avez choisi un voyage sur : <br>';
  echo $voyage. ', '. '<br>';
  echo "Vous avez indiquez $nombreperso  personnes  ";
  echo  "pour un montant total de : $montant Euro";
  $montant = 0;
  $voyage = null;
  echo '<br>';
  echo ' <br>';
  echo '<a href="formulaire.php">Cliquez ICI pour retourner au formulaire </a>';
  echo '</div>';
  elseif ($_POST['voyage'] == 'voyage2'):
    echo '<div class="affichage">';
    echo '<p> Résumé de votre demande </p>';
  $montant = $nombreperso * 2000;
  $voyage = "Iles des oiseaux, au prix de 2000 Euro par Personne";
  echo 'Bonjour,'. ' '.$civilite. ' '.$nom. ' '.$prenom. '<br>';
  echo 'vous avez choisi un voyage sur : <br>';
  echo $voyage. ', '. '<br>';
  echo "Vous avez indiquez $nombreperso  personnes  ";
  echo  "pour un montant total de : $montant Euro";
  $montant = 0;
  $voyage = null;
  echo '<br>';
  echo ' <br>';
  echo '<a href="formulaire.php">Cliquez ICI pour retourner au formulaire </a>';
  echo '</div>';
  elseif ($_POST['voyage'] == 'voyage3'):
    echo '<div class="affichage">';
    echo '<p> Résumé de votre demande </p>';
  $montant = $nombreperso * 1800;
  $voyage = "Pays de l entrée du paradis, au prix de 1800 Euro par Personne";
  echo 'Bonjour,'. ' '.$civilite. ' '.$nom. ' '.$prenom. '<br>';
  echo 'vous avez choisi un voyage sur : <br>';
  echo $voyage. ', '. '<br>';
  echo "Vous avez indiquez $nombreperso  personnes  ";
  echo  "pour un montant total de : $montant Euro";
  $montant = 0;
  $voyage = null;
  echo '<br>';
  echo ' <br>';
    echo '<a href="formulaire.php">Cliquez ICI pour retourner au formulaire </a>';
  echo '</div>';

endif;

// Affichage de l'option excursion

  if ($_POST['excursion'] == "excursion1"):
    echo '<div class="affichage">';
    echo '<p> Résumé de votre demande </p>';
  $montant = $nombreperso * 100;
  $voyage = "Visite du Pandemoinium, au prix de 100 Euro par personne";
  echo 'Bonjour,'. ' '.$civilite. ' '.$nom. ' '.$prenom. '<br>';
  echo 'vous avez choisi un voyage sur : <br>';
  echo $voyage. ', '. '<br>';
  echo "Vous avez indiquez $nombreperso  personnes  ";
  echo  "pour un montant total de : $montant Euro";
  $montant = 0;
  $voyage = null;
  echo '<br>';
  echo ' <br>';
    echo '<a href="formulaire.php">Cliquez ICI pour retourner au formulaire </a>';
  echo '</div>';
  elseif ($_POST['excursion'] == 'excursion2'):
    echo '<div class="affichage">';
    echo '<p> Résumé de votre demande </p>';
  $montant = $nombreperso * 400;
  $voyage = "Visite des Antilles, au prix de 400 Euro par personne";
  echo 'Bonjour,'. ' '.$civilite. ' '.$nom. ' '.$prenom. '<br>';
  echo 'vous avez choisi un voyage sur : <br>';
  echo $voyage. ', '. '<br>';
  echo "Vous avez indiquez $nombreperso  personnes  ";
  echo  "pour un montant total de : $montant Euro";
  $montant = 0;
  $voyage = null;
  echo '<br>';
  echo ' <br>';
    echo '<a href="formulaire.php">Cliquez ICI pour retourner au formulaire </a>';
  echo '</div>';
  elseif ($_POST['excursion'] == 'excursion3'):
    echo '<div class="affichage">';
    echo '<p> Résumé de votre demande </p>';
  $montant = $nombreperso * 500;
  $voyage = "Visite des musée de new york, au prix de 500 Euro par Personne";
  echo 'Bonjour,'. ' '.$civilite. ' '.$nom. ' '.$prenom. '<br>';
  echo 'vous avez choisi un voyage sur : <br>';
  echo $voyage. ', '. '<br>';
  echo "Vous avez indiquez $nombreperso  personnes  ";
  echo  "pour un montant total de : $montant Euro";
  $montant = 0;
  $voyage = null;
  echo '<br>';
  echo ' <br>';
    echo '<a href="formulaire.php">Cliquez ICI pour retourner au formulaire </a>';
  echo '</div>';
  elseif ($_POST['excursion'] == 'excursion4'):
    echo '<div class="affichage">';
    echo '<p> Résumé de votre demande </p>';
  $montant = $nombreperso * 350;
  $voyage = "Visite de la foêt des dieu, au prix de 350 Euro par personne";
  echo 'Bonjour,'. ' '.$civilite. ' '.$nom. ' '.$prenom. '<br>';
  echo 'vous avez choisi un voyage sur : <br>';
  echo $voyage. ', '. '<br>';
  echo "Vous avez indiquez $nombreperso  personnes  ";
  echo  "pour un montant total de : $montant Euro";
  $montant = 0;
  $voyage = null;
  echo '<br>';
  echo ' <br>';
    echo '<a href="formulaire.php">Cliquez ICI pour retourner au formulaire </a>';
  echo '</div>';
endif;
?>
<br>
<marquee id="id1">
<span onmouseout="getElementById('id1').start();" onmouseover="getElementById('id1').stop();">
<img border="1" alt="" src="avion.jpg">
</span>
</marquee>
</body>
</html>
