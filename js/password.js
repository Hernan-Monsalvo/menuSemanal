var contraseña = document.querySelector("#pass");
var enviar = document.querySelector("#submit");

function Pass() {

    if (contraseña.value == "martin") {

        enviar.disabled = false;

    } else {

        enviar.disabled = true;
    }


}