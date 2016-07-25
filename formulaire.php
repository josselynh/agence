<!DOCTYPE html>
<?php
session_start(); // démarrage de la session
?>
<html>
  <head>
      <meta charset="utf-8">
      <title>Formulaire - Etape 1</title>
      <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
  </head>
  <body><br><br><br>
        <h2 align= "center"> Votre agence de voyage à votre disposition <br>
        <h3 align="center"> Identifiez vous et faites votre choix !<br><br>
        <select name="civilite">
            <option value="value1">Mr</option>
            <option value="value2">Mme</option>
        </select>
        <form action="agence.php" method="post">
            <p> Nom : <input name="nom" required size="30" type="text"  </p>
            <p> Prenom : <input type="text" size="30" required name="prenom"></p>
            <p style="width:200px;"><font color="#C83D87"><input type=radio required name="choix" value="monvoyage"> Voyage</p>
            <p style="width:200px;"><font color="#C83D87"><input type=radio required name="choix" value="excursion"> Excursion</font></p>
            <p style="width:30px;"><input type=submit name="suite" value="suite"></p>
        </form> </h3></h2><br><br><br><br><br><br>
        "<marquee><h1> BIEVENUE &nbsp;&nbsp DANS &nbsp;&nbsp VOTRE &nbsp;&nbsp AGENCE &nbsp;&nbsp DE  &nbsp VOYAGE</marquee></h1>";
  </body>
</html>
