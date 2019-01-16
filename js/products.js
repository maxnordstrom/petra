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


// Making array of objects to be able to iterate

let tempArray = [elcykelAllegro, lapierreOvervolt, chromeCast, appleTv, bigFoot]; // temp array to iterate over

const tax = 12.5; // tax in percent
let noTax; // making the declaration global


for (let i = 0; i < tempArray.length; i++) {

}


// Injecting the priceNoTax property
// Calculating price without tax, appending to object, self-invoking



(function calcPriceNoTax() {
  noTax = lapierreOvervolt.priceTax / (tax / 100 + 1);
  noTax = Math.ceil(noTax);
  lapierreOvervolt = Object.assign({priceNoTax: noTax}, lapierreOvervolt);
  console.log(lapierreOvervolt);
}());



// Making the objects to two-dimensioned arrays

let elcykelAllegroArr = Object.entries(elcykelAllegro);
let lapierreOvervoltArr = Object.entries(lapierreOvervolt);
let chromeCastArr = Object.entries(chromeCast);
let appleTvArr = Object.entries(appleTv);
let bigFootArr = Object.entries(bigFoot);


// Making an array of two-dimensioned arrays

let petraProducts = [elcykelAllegroArr, lapierreOvervoltArr, chromeCastArr, appleTvArr, bigFootArr];


// Creating function that loops and printing out the arrays

let theRows = '';

function printProducts() {
  for (let i = 0; i < petraProducts.length; i++) {
    for (let [key, value] of petraProducts[i]) {
      theRows += (`<td>${value}</td>`);
      document.getElementById('tbody').innerHTML = theRows;
    }
  }
}

printProducts();