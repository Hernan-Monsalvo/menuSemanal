var listaChino = [];
var listaCarniceria = [];
var listaVerduleria = [];


for (let i = 0; i < 9; i++) {
    listaDeCompra(Comidas[i]);
}

var listaChino2 = [...new Set(listaChino)];
var listaCarniceria2 = [...new Set(listaCarniceria)];
var listaVerduleria2 = [...new Set(listaVerduleria)];

listaChino2.sort();
listaCarniceria2.sort();
listaVerduleria2.sort();


panelChino = document.querySelector("#listaChino .lista");
panelCarniceria = document.querySelector("#listaCarniceria .lista");
panelVerduleria = document.querySelector("#listaVerduleria .lista");


listaChino2.forEach(element => {

    //let li = document.createElement("li");
    let li = document.createElement('input');
    li.type = 'checkbox';
    let txt = document.createTextNode(element);
    let label = document.createElement('label');

    label.appendChild(li);
    label.appendChild(txt);
    panelChino.appendChild(label);


});

listaCarniceria2.forEach(element => {

    let li = document.createElement('input');
    li.type = 'checkbox';
    let txt = document.createTextNode(element);
    let label = document.createElement('label');


    label.appendChild(li);
    label.appendChild(txt);
    panelCarniceria.appendChild(label);

});

listaVerduleria2.forEach(element => {

    let li = document.createElement('input');
    li.type = 'checkbox';
    let txt = document.createTextNode(element);
    let label = document.createElement('label');

    label.appendChild(li);
    label.appendChild(txt);
    panelVerduleria.appendChild(label);


});



function listaDeCompra(Comida) {

    switch (Comida) {

        case "Arroz con cosas":
            listaChino.push("Arroz");
            listaChino.push("Arvejas");
            listaVerduleria.push("Cebolla");
            break;
        case "Fideos especiales":
            listaChino.push("Fideos tallarin");
            listaChino.push("Huevo");
            listaVerduleria.push("Cebolla");
            break;
        case "Tarta/empanada, de verdura":
            listaChino.push("Tapa tarta o empanada");
            listaChino.push("Huevo");
            listaChino.push("Muzzarela");
            listaChino.push("Jamon");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaVerduleria.push("Espinaca");
            break;
        case "Curry":
            listaChino.push("Arroz");
            listaVerduleria.push("Papa");
            listaVerduleria.push("Batata");
            listaVerduleria.push("Anco");
            break;
        case "Papa y batata":
            listaVerduleria.push("Papa");
            listaVerduleria.push("Batata");
            break;
        case "Pizza":
            listaChino.push("Harina p/ pizza");
            listaChino.push("Muzzarela");
            listaChino.push("Salsa tomate");
            break;
        case "Sopa de pollo":
            listaChino.push("Fideos sopa");
            listaCarniceria.push("Pata y muslo (o ya tener caldo)");
            listaChino.push("Arvejas");
            break;
        case "polenta":
            listaChino.push("Polenta");
            listaChino.push("Salsa tomate");
            listaChino.push("Muzzarela");
            break;
        case "Noquis":
            listaChino.push("Ñoquis");
            listaChino.push("Salsa tomate");
            break;
        case "Ravioles":
            listaChino.push("Ravioles");
            listaChino.push("Salsa tomate");
            break;
        case "Guiso":
            listaVerduleria.push("Papa");
            listaVerduleria.push("Anco");
            listaVerduleria.push("Zanahoria");
            listaChino.push("Lentejas");
            break;
        case "Fideos con tuco/manteca":
            listaChino.push("Fideos tallarin");
            listaChino.push("Salsa tomate");
            listaChino.push("Manteca");
            break;
        case "Sopa c/ arroz":
            listaVerduleria.push("Bandeja p/ sopa (o ya tener caldo)");
            listaChino.push("Arroz");
            break;
        case "Ramen":
            listaChino.push("Fideos tallarin");
            listaChino.push("Huevo");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Bandeja p/ sopa (o ya tener caldo)");
            break;
        case "Porotos con queso":
            listaChino.push("Muzzarela");
            listaChino.push("Porotos");
            break;
        case "Empanadas carne/pollo":
            listaChino.push("Tapa empanada");
            listaChino.push("Huevo");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaCarniceria.push("Pata y muslo o Bola de lomo");
            break;
        case "Milanesas con pure":
            listaCarniceria.push("Bola de lomo, cuadrada o nalga");
            listaChino.push("Huevo");
            listaChino.push("Pan rallado");
            listaVerduleria.push("Papa");
            listaVerduleria.push("Ajo");
            listaChino.push("Aceite");
            break;
        case "Pastel de papa":
            listaCarniceria.push("Bola de lomo, cuadrada o nalga");
            listaChino.push("Huevo");
            listaChino.push("Muzzarela");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaVerduleria.push("Papa");
            listaCarniceria.push("Carne picada");
            break;
        case "Pollo/carne al horno con papa":
            listaCarniceria.push("Pata y muslo o carne para horno(colita o tapa de asado)");
            listaVerduleria.push("Papa");
            break;
        case "Alitas con arroz":
            listaCarniceria.push("Alitas");
            listaChino.push("Arroz");
            break;
        case "Tacos de carne":
            listaChino.push("Tortilla p/ taco");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaCarniceria.push("Bola de lomo, cuadrada o nalga");
            break;
        case "Tacos de pollo":
            listaChino("Tortilla p/ taco");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaCarniceria.push("Supremas");
            break;
        case "Dumpling carne/pollo":
            listaCarniceria.push("Pata y muslo o Bola de lomo");
            listaChino.push("Tapa empanada");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            break;
        case "Empanada frita":
            listaChino.push("Tapa empanada");
            listaChino.push("Huevo");
            listaChino.push("Aceite");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaCarniceria.push("Bola de lomo, cuadrada o nalga");
            break;
        case "Tarta pollo":
            listaChino.push("Tapa tarta");
            listaChino.push("Huevo");
            listaChino.push("Muzzarela");
            listaChino.push("Jamon");
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaCarniceria.push("Pata y muslo");
            break;
        case "pollo frito":
            listaCarniceria.push("Supremas");
            listaChino.push("Huevo");
            listaChino.push("Pan rallado");
            listaVerduleria.push("Ajo");
            listaChino.push("Aceite");
            listaChino.push("Arroz");
            break;
        case "Sanguche de Milanesa":
            listaCarniceria.push("Bola de lomo, cuadrada o nalga");
            listaChino.push("Huevo");
            listaChino.push("Pan rallado");
            listaChino.push("Pan");
            listaVerduleria.push("Ajo");
            listaChino.push("Aceite");
            break;
        case "Sanguche de pollo":
            listaChino.push("Pan");
            listaCarniceria.push("Supremas");
            break;
        case "pollo a la bolsita":
            listaVerduleria.push("Cebolla");
            listaVerduleria.push("Morron");
            listaCarniceria.push("Pata y muslo");
            listaVerduleria.push("Papa");
            break;
        case "Guiso de lenteja potente":
            listaVerduleria.push("Papa");
            listaVerduleria.push("Anco");
            listaVerduleria.push("Zanahoria");
            listaChino.push("Lentejas");
            listaCarniceria.push("Carne para guiso");
            break;
        case "Tostaditos":
            listaChino.push("Pan lactal");
            listaChino.push("Jamon");
            listaChino.push("Queso");
            break;
        case "Rollos de huevo":
            listaChino.push("Jamon");
            listaChino.push("Queso");
            listaChino.push("Huevo");
            listaChino.push("Tortilla p/ taco");
            break;

    }

}