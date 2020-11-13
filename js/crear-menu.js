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
    "Porotos con queso"
];

var nv = Plato_vegg.length - 1;

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
    "Guiso de lenteja potente"
];

var nc = Plato_carn.length - 1;

var Delivery = [

    "La 9",
    "Homero",
    "Arseno",
    "La estacion",
    "Akita",
    "Burger garage",
    "Tostaditos",
    "Rollos de huevo"
];

var nd = Delivery.length - 1;

var Plato = [
    //sabado
    Plato_vegg[aleatorio(nv)],
    Plato_vegg[aleatorio(nv)],
    //domingo
    Plato_carn[aleatorio(nc)],
    Plato_vegg[aleatorio(nv)],
    //lunes
    Plato_vegg[aleatorio(nv)],
    //martes
    Plato_vegg[aleatorio(nv)],
    //miercoles
    Plato_carn[aleatorio(nc)],
    //jueves
    Plato_vegg[aleatorio(nv)],
    //viernes
    Delivery[aleatorio(nd)]

];



//alert(aleatorio(nd));

//evitar repetidos:

while (Plato[1] == Plato[0]) {

    Plato[1] = Plato_vegg[aleatorio(nv)];

}

while (Plato[3] == Plato[0] || Plato[3] == Plato[1]) {

    Plato[3] = Plato_vegg[aleatorio(nv)];

}

while (Plato[4] == Plato[0] || Plato[4] == Plato[1] || Plato[4] == Plato[3]) {

    Plato[4] = Plato_vegg[aleatorio(nv)];

}

while (Plato[5] == Plato[0] || Plato[5] == Plato[1] || Plato[5] == Plato[3] || Plato[5] == Plato[4]) {

    Plato[5] = Plato_vegg[aleatorio(nv)];

}

while (Plato[7] == Plato[0] || Plato[7] == Plato[1] || Plato[7] == Plato[3] || Plato[7] == Plato[4] || Plato[7] == Plato[5]) {

    Plato[7] = Plato_vegg[aleatorio(nv)];

}

while (Plato[6] == Plato[2]) {

    Plato[6] = Plato_carn[aleatorio(nc)];

}



//alert(Plato_vegg[aleatorio(nv)]);

//alert(Plato[0] + " " + Plato[1] + " " + Plato[2] + " " + Plato[3] + " " + Plato[4]);

var dia = document.getElementsByClassName("dia");

for (let i = 0; i < Plato.length; i++) {

    dia[i].value = Plato[i];

}

function aleatorio(n) {
    return Math.round(Math.random() * n);

}






