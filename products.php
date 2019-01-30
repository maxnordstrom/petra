<?php

// Bootstrap database
include('db.php');

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


// // Function that prints the full products list
// let myHtml = '';

// function printProducts() {
//   for (let i = 0; i < petraProducts.length; i++) {
//     myHtml += (
//       `<tr>
//         <td>${petraProducts[i].artNumber}</td>
//         <td>${petraProducts[i].artName}</td>
//         <td>${petraProducts[i].description}</td>
//         <td>${petraProducts[i].category}</td>
//         <td>${petraProducts[i].priceTax}</td>
//         <td>${petraProducts[i].priceNoTax}</td>
//       </tr>`);
//     document.getElementById('tbody').innerHTML = myHtml;
//   }
// }

// // printProducts();
// let pathName = window.location.pathname.split('/');
// console.log(pathName);

// if (pathName[1] == 'petra') {
//   printProducts(); //CALL DATABASE HERE
// } else if (pathName[2] == true) {
//   //FILTER BY CATEGORY
// } else if (pathName[3] == true) {
//   //FILTER BY PRODUCT NAME
// };