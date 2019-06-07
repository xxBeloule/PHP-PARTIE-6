<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
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
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
    <?php
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
    if (isset($startDate)&& isset($endDate))
    {
      echo "Les variables sont bien passées dans l'url"; ?>
      <p>
  <?php
  echo $startDate.' '.$endDate;
  ?>
      </p>
  <?PHP
    } else {
      echo "La ou les variables ne sont pas passées";
    }

    ?>
  </div>
</body>
</html>
