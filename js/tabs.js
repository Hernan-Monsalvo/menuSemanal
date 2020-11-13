function activar(btn) {

    var nuevaTab = document.querySelector(".activo");
    nuevaTab.setAttribute("class", "tabContent");

    var viejaTab = document.querySelector(btn);
    viejaTab.setAttribute("class", "tabContent activo");


}