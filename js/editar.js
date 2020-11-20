var Plato_vegg = [
  "Arroz con cosas",
  "Fideos especiales",
  "Tarta/empanada, de verdura",
  "Curry",
  "Papa y batata",
  "Pizza",
  "Sopa de pollo",
  "polenta",
  "Noquis",
  "Ravioles",
  "Guiso",
  "Fideos con tuco/manteca",
  "Sopa c/ arroz",
  "Ramen",
  "Porotos con queso",
];

var Plato_carn = [
  "Empanadas carne/pollo",
  "Milanesas con pure",
  "Pastel de papa",
  "Pollo/carne al horno con papa",
  "Alitas con arroz",
  "Tacos de carne",
  "Tacos de pollo",
  "Dumpling carne/pollo",
  "Empanada frita",
  "Tarta pollo",
  "pollo frito",
  "Sanguche de Milanesa",
  "Sanguche de pollo",
  "pollo a la bolsita",
  "Guiso de lenteja potente",
];

var Delivery = [
  "La 9",
  "Homero",
  "Arseno",
  "La estacion",
  "Akita",
  "Burger garage",
  "Tostaditos",
  "Rollos de huevo",
];

var dia = document.getElementsByClassName("dia");


for(i = 0; i < 9; i++){

  if (i == 2 || i == 6) {
    Plato_carn.forEach((element) => {
      var opt = document.createElement("option");

      opt.appendChild(document.createTextNode(element));

      opt.value = element;

      dia[i].appendChild(opt);
    });
  } else if (i == 8){
    Delivery.forEach((element) => {
        var opt = document.createElement("option");
  
        opt.appendChild(document.createTextNode(element));
  
        opt.value = element;
  
        dia[i].appendChild(opt);
      });
  } else{
    Plato_vegg.forEach((element) => {
        var opt = document.createElement("option");
  
        opt.appendChild(document.createTextNode(element));
  
        opt.value = element;
  
        dia[i].appendChild(opt);
      });
  }

}

