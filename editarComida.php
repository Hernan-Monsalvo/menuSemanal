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



            <form action="edicionComida.php" method="POST">

                <ul id="listaCompra">
                    <li><?= $lista["1"] ?></li>
                    <li>verga</li>
                    <li>hojas de coliflor</li>
                </ul>



                <div id=newIng>
                    <button type="submit" name="nuevoMenu" id="modificar">Agregar ingrediente</button>
                    <input type="text" name="ingrediente" id="ingrediente" placeholder="Nuevo ingrediente">
                    <select name="" id="">
                        <option value="Chino">Chino</option>
                        <option value="Verduleria">Verduleria</option>
                        <option value="Carniceria">Carniceria</option>
                    </select>
                </div>



            </form>
        </div>


        <div class="botones">

            <a href="gestorDeComidas.php" class="volver">Volver</a>
            <button type="submit" name="nuevoMenu" id="modificar">Guardar cambios</button>

        </div>

    </div>

</body>

</html>