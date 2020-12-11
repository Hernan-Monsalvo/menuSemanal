<?php include 'db-menu.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos-menu.css">
    <title>Menu semanal</title>
</head>

<body id="index">

    <?php

    $tabla = $_GET["Tabla"];
    $plato = "";
    ?>

    <div class="container nMenu">



        <h1 class="titulo">Crea tu plato:</h1>
        <input type="text" name="titulo" id="titulo">
        <h2>Ingredientes:</h2>
        <div class="inputs editarComida">





            <ul id="listaCompra">

            </ul>

            <script>
                function borrarIng(n) {

                    let li = document.querySelector("#" + n);
                    li.remove();

                }
            </script>

            <div id=newIng>
                <button onclick="agregarIngrediente()" name="nuevoMenu" id="modificar">Agregar ingrediente</button>
                <input type="text" name="ingrediente" id="ingrediente" placeholder="Nuevo ingrediente">
                <select name="Tipo" id="Tipo">
                    <option value="Chino">Chino</option>
                    <option value="Verd.">Verduleria</option>
                    <option value="Carn.">Carniceria</option>
                </select>
            </div>




        </div>


        <div class="botones">

            <a href="gestorDeComidas.php" class="volver">Volver</a>
            <button onclick="guardarPlato()" name="nuevoMenu" id="modificar">Guardar cambios</button>

            <script>
                var inputIng = document.querySelector("#ingrediente");
                var inputTipo = document.querySelector("#Tipo");

                function agregarIngrediente() {

                    let ing = inputIng.value;
                    let tipo = inputTipo.value;
                    let li = document.createElement('li');
                    let btnBorrar = document.createElement('button');
                    btnBorrar.setAttribute("onclick", "borrarIng('" + ing + "')");
                    let txt = document.createTextNode(ing + " (" + tipo + ")");
                    li.appendChild(txt);
                    li.appendChild(btnBorrar);
                    li.setAttribute("id", ing);
                    listaCompra.appendChild(li);

                }



                function guardarPlato() {
                    var ing = document.querySelectorAll("ul#listaCompra li");
                    var ingSql = "";

                    ing.forEach(element => {

                        element = element.textContent;

                        let cha = element.charAt(element.length - 6);

                        if (element.charAt(element.length - 5) == "a") {
                            cha = "X";
                        }

                        element = cha + element.substring(0, element.length - 8);

                        ingSql += element + "-";

                    });
                    ingSql = ingSql.substring(0, ingSql.length - 1);

                    let plato = document.querySelector("#titulo").value;
                    window.location.replace("nuevaComida.php?Lista=" + ingSql + "&Tabla=<?= $tabla ?>&Plato=" + plato, "");
                }
            </script>

        </div>

    </div>

</body>

</html>