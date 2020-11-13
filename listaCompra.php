<?php include 'db-menu.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos-menu.css">
    <title>Menu semanal</title>
</head>

<body id="listaCompra">
    <?php
    $id = $_GET["id"];

    $query = "select * from menu_semanal where ID= '$id'";
    $result_tasks = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result_tasks)) {
    ?> <script>
            var Comidas = [
                "<?php echo $row["sabado_almuerzo"] ?>",
                "<?php echo $row['sabado_cena']; ?>",
                "<?php echo $row['domingo_almuerzo']; ?>",
                "<?php echo $row['domingo_cena']; ?>",
                "<?php echo $row['lunes']; ?>",
                "<?php echo $row['martes']; ?>",
                "<?php echo $row['miercoles']; ?>",
                "<?php echo $row['jueves']; ?>",
                "<?php echo $row['viernes']; ?>"
            ];
        </script>

    <?php } ?>

    <div class="nav">
        <button class="tab" onclick="activar('#listaVerduleria')">
            <img src="https://img.icons8.com/cotton/64/000000/lettuce-1--v1.png" /></button>
        <button class="tab" onclick="activar('#listaCarniceria')">
            <img src="https://img.icons8.com/cotton/64/000000/steak-rare--v1.png" /></button>
        <button class="tab" onclick="activar('#listaChino')">
            <img src="https://img.icons8.com/fluent/48/000000/shopping-cart.png" /></button>
    </div>

    <div id="triciclo">
        <img src="css/transparent.png" alt="tintin">

    </div>


    <div id="listaChino" class="tabContent activo">
        <h1 class="tituloLista">A comprar en el chino</h1>
        <div class="lista">



        </div>





    </div>

    <div id="listaCarniceria" class="tabContent">
        <h1 class="tituloLista">A comprar en la carniceria</h1>
        <div class="lista">



        </div>
    </div>

    <div id="listaVerduleria" class="tabContent">
        <h1 class="tituloLista">A comprar en la verduleria</h1>
        <div class="lista">



        </div>
    </div>


    <div class="boton volver">
        <a href="historial.php">Volver</a>
    </div>
    <footer id="footer">

        H.Monsalvo 2020 © Todos los derechos reservados

    </footer>

    <script src="js/tabs.js"></script>
    <script src="js/listaCompra.js"></script>
</body>

</html>