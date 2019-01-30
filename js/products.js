// Making the product objects
let elcykelAllegro = {
  artNumber: 39533028,
  artName: 'Elcykel Allegro',
  description: 'En smart och tillförlitlig elcykel för dam från Batavus utmärkt både för långa och kortare turer.',
  category: 'Sport',
  priceTax: 18499
};

let lapierreOvervolt = {
  artNumber: 40266837,
  artName: 'Lapierre Overvolt Urban 300',
  description: 'Praktisk och bekväm elcykel med upprätt körställning.',
  category: 'Sport',
  priceTax: 20990
};

let chromeCast = {
  artNumber: 'p35372817',
  artName: 'Chrome cast 2nd generationen',
  description: 'Visar film eller annan media från mobilen på TV:n',
  category: 'Hemelektronik',
  priceTax: 390
};

let appleTv = {
  artNumber: 35552289,
  artName: 'Apple TV 64GB 4th generation',
  description: 'Nu kommer App Store till din tv. Du kan förvänta dig massor av spännande spel.',
  category: 'Hemelektronik',
  priceTax: 1990
};

let bigFoot = {
  artNumber: 40151785,
  artName: 'Big Foot truck 2wd',
  description: 'Det här är bilen som startade alltihop och skapade den idag enorma monster-truck trenden.',
  category: 'Leksaker',
  priceTax: 2795
};


// Putting the products in an array
let petraProducts = [elcykelAllegro, lapierreOvervolt, chromeCast, appleTv, bigFoot];


// Calculating and adding property of no tax
for (let i = 0; i < petraProducts.length; i++) {
  (function calcPriceNoTax() {
    const tax = 12.5;
    let noTax = petraProducts[i].priceTax / (tax / 100 + 1);
    noTax = Math.ceil(noTax);
    petraProducts[i].priceNoTax = noTax;
  }());
}


// Function that prints the full products list
let myHtml = '';

function printProducts() {
  for (let i = 0; i < petraProducts.length; i++) {
    myHtml += (
      `<tr>
        <td>${petraProducts[i].artNumber}</td>
        <td>${petraProducts[i].artName}</td>
        <td>${petraProducts[i].description}</td>
        <td>${petraProducts[i].category}</td>
        <td>${petraProducts[i].priceTax}</td>
        <td>${petraProducts[i].priceNoTax}</td>
      </tr>`);
    document.getElementById('tbody').innerHTML = myHtml;
  }
}

// printProducts();
let pathName = window.location.pathname.split('/');
pathName.shift();
pathName.pop();


// if (pathName[1] == 'petra') {
//   printProducts(); //CALL DATABASE HERE
// } else if (pathName[2] == true) {
//   //FILTER BY CATEGORY
// } else if (pathName[3] == true) {
//   //FILTER BY PRODUCT NAME
// };



// // Creating IF statement that filters by URL
// let myURL = window.location.pathname;

// if (myURL.includes('index.html' && 'leksaker')) {
//   //FILTER AND PRINT OUT OBJECTS WITH CATEGORY LEKSAKER
// } else if (myURL.includes('index.html' && 'sport')) {
//   //FILTER AND PRINT OUT OBJECTS WITH CATEGORY SPORT
// } else if (myURL.includes('index.html' && 'sport' && 'elcykel-allegro')) {
//   //FILTER AND PRINT OUT OBJECTS WITH artName 'Elcykel Allegro'
// } else {
//   printProducts();
// }