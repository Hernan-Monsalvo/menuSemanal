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

