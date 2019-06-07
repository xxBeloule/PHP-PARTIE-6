<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PHP partie 6 exercice 6</title>
        <style>
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
            <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101</p> 
            <p class="white"> <a href="index.php?building=12&room=101">Créer la fonction :</a>
             <?php
             if (isset($_GET['building']) && isset($_GET['room']) )
             {
                 echo 'Valeur de $building : ' .$_GET['building'].'  | Valeur de $room : '.$_GET['room'];
             } 
             else 
             {
               echo 'L\'une des deux variables n\'est pas valide. Veuillez cliquez sur le lien.';
             }
             ?>
            </p>
        </div>
    </body>
</html>