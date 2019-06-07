<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP partie 6 exercice 1</title>
    <style media="screen">
    .color {
      background-color: grey;
      font-weight: 400;
      border: 3px solid black;
      margin: 20px;
      padding: 20px;
      text-align: center;
      border-radius: 200px;
      font-weight: bolder;
    }
    .white {
      color: white;
    }
    </style>
  </head>
  <body>
    <div class="color">
      <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
      <p class="white">
      <?php
      $name = $_GET['name'];
      $firstname = $_GET['firstname'];
      echo "Vous vous appelez : " .$name. " et votre nom de famille est : " . $firstname;
      ?>
    </p>
    <a href="index.php?name=Belal&firstname=siddique">Lien</a>
    </div>
  </body>
</html>
