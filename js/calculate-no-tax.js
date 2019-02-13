jQuery(document).ready(function() {


  // Set variable to number of table rows
  let $numberOfRows = document.getElementsByClassName("table-row").length;

  for (let i = 1; i <= $numberOfRows; i++) {

    // Get  price with tax
    let $priceTax = document.getElementById("price-tax-"+i).innerHTML;
    $priceTax = parseInt($priceTax);

    // Calculate price without tax
    ($calcPriceNoTax = function() {
      $taxPercent = 12.5;
      $priceNoTax = $priceTax / ($taxPercent / 100 + 1);
      $priceNoTax = Math.ceil($priceNoTax);
    }());

    // Append price without tax
    let $noTaxCol = $('<td>' + $priceNoTax + '</td>');

    $('#product-row-' + i).append($noTaxCol);
  }

});
