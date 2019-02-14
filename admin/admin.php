<?php

include('../db.php');
include('../products.php');

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="icon" href="favicon.ico" />

  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

<iframe name="hiddenFrame" class="hide"></iframe>

<div class="admin-wrapper container border p-4 mt-5">
  <h5 class="ml-3">Admin panel:</h5>
  <form method="post" action="admin-script.php" target="hiddenFrame" class="admin-panel d-sm-flex" id="admin-update-form">
    <div class="form-group col-md-3 col-sm-12">
      <label for="artikelnummer">Produkt att redigera</label>
      <select class="form-control form-control-sm" id="art_name" name="article-name">

        <?php // Get article names

          $getArtName = $pdo->query('SELECT art_name FROM product');

          echo '<option selected="true" disabled>Välj produkt</option>';

          foreach ($getArtName as $row) {
            echo '<option>' . $row['art_name'] . '</option>';
          }

        ?>

      </select>
    </div>
    <div class="form-group col-md-3 col-sm-12">
      <label for="edit-value">Kolumn att redigera</label>
      <select class="form-control form-control-sm" id="edit-value" name="column-to-edit">

        <?php  // Get column names

          echo '<option selected="true" disabled>Välj kolumn</option>';

          $rs = $pdo->query('SELECT * FROM product LIMIT 0');
          for ($i = 0; $i < $rs->columnCount(); $i++) {
              $col = $rs->getColumnMeta($i);
              $columns[] = $col['name'];
          }
          array_shift($columns);
          foreach ($columns as $row) {
            echo '<option>' . $row . '</option>';
          }

        ?>

      </select>
    </div>
    <div class="form-group col-md-3 col-sm-12">
      <label for="new-value">Nytt värde</label>
      <textarea class="form-control" id="new-value" rows="1" name="new-value"></textarea>
    </div>
    <button name="update" type="submit" class="submit-btn btn btn-primary col-md-3 col-sm-12" id="admin-update">Uppdatera</button>
  </form>
</div>

<table class="table-bordered table-sm mt-5">
    <thead>
      <th scope="col">Artikel nr</th>
      <th scope="col">Artikel namn</th>
      <th scope="col">Beskrivning</th>
      <th scope="col">Kategori</th>
      <th scope="col">Pris i kr inkl. moms</th>
      <th scope="col">Pris i kr exkl. moms</th>
    </thead>
    <tbody id="tbody">

      <?php

      $getAllProds = $pdo->query('SELECT * FROM product');
      printData($getAllProds);

      ?>

    </tbody>
  </table>

  <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/refresh-admin.js"></script>
  <script src="../js/calculate-no-tax.js"></script>

</body>

</html>