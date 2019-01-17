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


// Calculating and adding property of no tax

let tempArray = [elcykelAllegro, lapierreOvervolt, chromeCast, appleTv, bigFoot]; // temp array to iterate over

for (let i = 0; i < tempArray.length; i++) {
  (function calcPriceNoTax() {
    const tax = 12.5;
    let noTax = tempArray[i].priceTax / (tax / 100 + 1);
    noTax = Math.ceil(noTax);
    tempArray[i].priceNoTax = noTax;
  }());
}

let myHtml = '';

function printProducts() {
  for (let i = 0; i < tempArray.length; i++) {
    myHtml += (`<tr>
                  <td>${tempArray[i].artNumber}</td>
                  <td>${tempArray[i].artName}</td>
                  <td>${tempArray[i].description}</td>
                  <td>${tempArray[i].category}</td>
                  <td>${tempArray[i].priceTax}</td>
                  <td>${tempArray[i].priceNoTax}</td>
                </tr>`);


    document.getElementById('tbody').innerHTML = myHtml;
  }
}

printProducts();