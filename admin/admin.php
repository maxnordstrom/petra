<?php

include('../db.php');
include('../products.php');




// $rs = $pdo->query('SELECT * FROM product LIMIT 0');
// for ($i = 0; $i < $rs->columnCount(); $i++) {
//     $col = $rs->getColumnMeta($i);
//     $columns[] = $col['name'];
// }
// foreach ($columns as $row) {
//   echo '<option>' . $row . '</option>';
// }


?>


<!--
Formulär måste ha action och method attribut.
Action definierar var formulärdatan ska skickas
  - localhost:8080/petra/admin/product/update (snyggast.nu)
  - db.php (fil)
Method
  - POST
  HTTP request methods
  CRUD (create, read, update, delete)

dit formulärdatan post:as, det är där du vill ha din update-query
form-data finns i $_POST variabeln
$_POST['art_no'] -> spara i databasen
-->


<div class="admin-wrapper container border p-4 mt-5">
  <h5 class="ml-3">Admin panel:</h5>

  <form class="admin-panel d-sm-flex">
    <div class="form-group col-md-3 col-sm-12">
      <label for="artikelnummer">Produkt att redigera</label>
      <select class="form-control form-control-sm" id="artikelnummer">

        <?php // Get article names

          $getArtName = $pdo->query('SELECT art_name FROM product');

          foreach ($getArtName as $row) {
            echo '<option>' . $row['art_name'] . '</option>';
          }

        ?>

      </select>
    </div>
    <div class="form-group col-md-3 col-sm-12">
      <label for="edit-value">Fält att redigera</label>
      <select class="form-control form-control-sm" id="edit-value">

        <?php  // Get column names

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
      <textarea class="form-control" id="new-value" rows="1"></textarea>
      <!-- TAKE THIS VALUE AND WRITE TO DATABASE -->
    </div>
    <button type="submit" class="submit-btn btn btn-primary col-md-3 col-sm-12">Skicka</button>
  </form>
</div>