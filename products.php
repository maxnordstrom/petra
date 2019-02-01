<?php

// Bootstrap database
include('db.php');


// Get the URI and make a neat array
$currentURI = $_SERVER['REQUEST_URI'];
$currentURI = explode("/",$currentURI);
array_shift($currentURI);
array_pop($currentURI);


// Fetching products depending on URI
if (count($currentURI) == 3 && $currentURI[2] == 'elcykel-allegro') { //check if any product is present
  var_dump($currentURI);

} elseif (count($currentURI) == 2 && $currentURI[1] == 'leksaker') { //check if any category is present
  var_dump($currentURI);

} else { //print all products
  $stmt = $pdo->query('SELECT * FROM product');
  var_dump($currentURI);
  foreach ($stmt as $row) {
    echo '<tr><td>' . $row['art_no'] . '</td>';
    echo '<td>' . $row['art_name'] . '</td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '<td>' . $row['cat'] . '</td>';
    echo '<td>' . $row['price_tax'] . '</td></tr>';
  }
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