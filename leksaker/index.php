<?php

$theCoolProds = query("SELECT * FROM product WHERE cat = 'leksaker'");
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
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

  <div id="petra-products"></div>

  <table class="table-bordered table-sm">
    <thead>
      <th scope="col">Artikel nr</th>
      <th scope="col">Artikel namn</th>
      <th scope="col">Beskrivning</th>
      <th scope="col">Kategori</th>
      <th scope="col">Pris i kr inkl. moms</th>
      <th scope="col">Pris i kr exkl. moms</th>
    </thead>
    <tbody id="tbody">
      <!-- products.js will return data here -->
    </tbody>
  </table>

  <div class="admin-wrapper container border p-4 mt-5">
    <h5 class="ml-3">Admin panel:</h5>

    <form class="admin-panel d-sm-flex">
      <div class="form-group col-md-3 col-sm-12">
        <label for="artikelnummer">Produkt att redigera (artikelnr.)</label>
        <select class="form-control form-control-sm" id="artikelnummer">
          <!-- INSERT AVAILABLE ARTICLE NUMBERS HERE -->
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select>
      </div>
      <div class="form-group col-md-3 col-sm-12">
        <label for="edit-value">Fält att redigera</label>
        <select class="form-control form-control-sm" id="edit-value">
          <!-- INSERT AVAILABLE FIELDS HERE -->
          <option>1</option>
          <option>2</option>
          <option>3</option>
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

  <!-- Admin panel:
        Choose product to edit (by product numer)
        What value to you want to edit (list of the different fields)
        New value (text field)
        Submit-button (here's where it gets written to database) -->


  <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <!-- Load React -->
  <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

  <!-- Load React components -->
  <script src="../js/products.js"></script>
</body>

</html>