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
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
    <p class="white">
      <?php
      $name = $_GET['name'];
      $firstname = $_GET['firstname'];
      $age = $_GET['age']; ?>

    <p class="white"><?php echo $name.' '.$firstname.' '.$age; ?> </p>
    <?php
      if ($_GET['age'] == "")
      {
        echo "L\'age n'est pas renseigné";
      }
      ?>
    </p>
  </div>
</body>
</html>
