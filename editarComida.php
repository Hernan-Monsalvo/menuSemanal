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

    $plato = $_GET["Plato"];
    $tabla = $_GET["Tabla"];
    $query = "select * from `$tabla` where Plato= '$plato'";
    $result = mysqli_query($conn, $query);
    $lista = mysqli_fetch_row($result);
    ?>

    <div class="container nMenu">



        <h1 class="titulo">Edita tu plato: <?= $plato ?></h1>
        <h2>Ingredientes:</h2>
        <div class="inputs editarComida">





            <ul id="listaCompra">

            </ul>

            <script>
                var listaSql = '<?= $lista["1"] ?>';
                var ing = listaSql.split("-");
                var listaCompra = document.querySelector("ul#listaCompra");
                ing.forEach(element => {

                    if (element.charAt(0) == "V") {
                        element = element.substring(1, element.lenght);
                        element += " (Verd.)"
                    } else if (element.charAt(0) == "C") {
                        element = element.substring(1, element.lenght);
                        element += " (Chino)"
                    } else if (element.charAt(0) == "X") {
                        element = element.substring(1, element.lenght);
                        element += " (Carn.)"
                    }


                    let li = document.createElement('li'); //creo el item de lista
                    let btnBorrar = document.createElement('button');
                    let id = element.split(" ");
                    btnBorrar.setAttribute("onclick", "borrarIng('" + id[0] + "')");
                    
                    let txt = document.createTextNode(element); //creo nodo de texto(tomo string del array)
                    li.appendChild(txt);
                    li.appendChild(btnBorrar);
                    li.setAttribute("id", id[0]);
                    listaCompra.appendChild(li);
                });

                function borrarIng(n) {

                    let li = document.querySelector("#"+n);
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


                    //window.location.replace("editarComida.php?Lista=" + ingSql + "&Tabla=<?= $tabla ?>&Plato=<?= $plato ?>", "");
                    window.location.replace("edicionComida.php?Lista=" + ingSql + "&Tabla=<?= $tabla ?>&Plato=<?= $plato ?>", "");
                }
            </script>

        </div>

    </div>

</body>

</html>