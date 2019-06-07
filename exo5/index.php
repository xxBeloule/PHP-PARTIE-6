<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP partie 6 exercice 5</title>
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
            <p>
                <a href="/index.php?week=12">Créer la fonction !</a>
            </p>
            <p>
            <?php
            if (isset($_GET['week'])) 
            {
                echo 'La valeur de la fonction en parametre est : '. $_GET['week']; ?> 
                <br> 
                <?php
                 echo "La fonction existe bien";
            } else {
                echo 'La fonction n\'existe pas!';
            }
            ?>
            </p>
        </div>
    </body>
</html>