<?php

include('../db.php');
include('../products.php');

?>


<div class="admin-wrapper container border p-4 mt-5">
  <h5 class="ml-3">Admin panel:</h5>

  <form method="post" action="admin-script.php" class="admin-panel d-sm-flex">
    <div class="form-group col-md-3 col-sm-12">
      <label for="artikelnummer">Produkt att redigera</label>
      <select class="form-control form-control-sm" id="art_name" name="article-name">

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
      <select class="form-control form-control-sm" id="edit-value" name="row-to-edit">

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
      <textarea class="form-control" id="new-value" rows="1" name="new-value"></textarea>
    </div>
    <button name="update" type="submit" class="submit-btn btn btn-primary col-md-3 col-sm-12">Uppdatera</button>
  </form>
</div>