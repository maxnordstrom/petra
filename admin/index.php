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

  <?php include('../db.php'); ?>

  <div class="admin-wrapper container border p-4 mt-5">
    <h5 class="ml-3">Admin panel:</h5>

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

  <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>

</html>