<?php

// Bootstrap database
include('db.php');


// Get the URI and make a neat array
$currentURI = $_SERVER['REQUEST_URI'];
$currentURI = explode("/",$currentURI);
array_shift($currentURI);
array_pop($currentURI);


// Function that prints out the data
function printData($data) {
  foreach ($data as $row) {
    echo '<tr><td>' . $row['art_no'] . '</td>';
    echo '<td>' . $row['art_name'] . '</td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '<td>' . $row['cat'] . '</td>';
    echo '<td>' . $row['price_tax'] . '</td></tr>';
  }
}


// Printing products depending on URI
if (count($currentURI) == 3) {              //check if any product is present
  $currentProd = $currentURI[2];            //get the product URI
  $currentProd = str_replace("-", " ", $currentProd);   //edit the URI to match db value
  $getProd = $pdo->query('SELECT * FROM product WHERE art_name LIKE "' . $currentProd . '"');

  printData($getProd);

} elseif (count($currentURI) == 2) {        //check if any category is present
  $currentCat = $currentURI[1];             //get the category URI
  $getCat = $pdo->query('SELECT * FROM product WHERE cat = "' . $currentCat . '"');

  printData($getCat);

} else { //print all products
  $getAllProds = $pdo->query('SELECT * FROM product');

  printData($getAllProds);
}






















// $queryString = "SELECT * FROM product";
// $theCoolProds = query($queryString);  //det är theCoolProds som returneras result

// var_dump($theCoolProds);







// // Database call to calculate number of products
// $petraProductsLength = 5;


// // Calculating and adding property of no tax
// for ($i = 0; $i < $petraProductsLength; $i++) {
//   ($calcPriceNoTax = function() {
//     $tax = 12.5;
//     $noTax = petraProducts[i].priceTax / (tax / 100 + 1);
//     $noTax = Math.ceil(noTax);
//     petraProducts[i].priceNoTax = noTax;
//   }());
// }