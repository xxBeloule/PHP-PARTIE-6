<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
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
  <body>
    <div class="color">
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP</p>
        <p class="white">
            <a href="/index.php?language=PHP&server=LAMP">Redirection</a>
            <?php
            $language = $_GET['language'];
            $server = $_GET['server'];
            if (isset ($_GET['language'])) {
                $language = $_GET['language'];
            } else {
            echo $language;
            }
            echo $language.' '.$server;
            ?>
        </p>
 </div>
  </body>
</html>
