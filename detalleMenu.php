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

    <div class="container nMenu">

        <div class="detalle">
            <?php
            $id = $_GET["id"];

            $query = "select * from menu_semanal where ID= '$id'";
            $result_tasks = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_tasks)) {
            ?>
                <h2 class="titulo">Menu de la <?php echo $row["semana"] ?>° sem de <?php echo $row["mes"] ?> </h2>

                <div class="dia"><strong>sab-alm.:</strong> <?php echo $row["sabado_almuerzo"] ?> </div>
                <div class="dia"><strong>sab-cena:</strong> <?php echo $row['sabado_cena']; ?></div>
                <div class="dia"><strong>dom-alm.:</strong> <?php echo $row['domingo_almuerzo']; ?></div>
                <div class="dia"><strong>dom-cena:</strong> <?php echo $row['domingo_cena']; ?></div>
                <div class="dia"><strong>lun:</strong> <?php echo $row['lunes']; ?></div>
                <div class="dia"><strong>mar:</strong> <?php echo $row['martes']; ?></div>
                <div class="dia"><strong>mie:</strong> <?php echo $row['miercoles']; ?></div>
                <div class="dia"><strong>jue:</strong> <?php echo $row['jueves']; ?></div>
                <div class="dia"><strong>vie:</strong> <?php echo $row['viernes']; ?></div>

        </div>

        <div class="botones">
            <a href="historial.php">Volver</a>
            <div class="acciones">
                <ul>
                    <li><a href="listaCompra.php?id=<?php echo $row["ID"] ?>">Lista de compra</a></li>
                    <li><a href="editar.php?id=<?php echo $row["ID"] ?>">Editar</a></li>
            <li><a href="#!" onclick='if (window.confirm("Realmente quieres eliminar?")) { 
  window.open("eliminar.php?id=<?php echo $row["ID"] ?>", "eliminando");}'>Eliminar</a></li>
                </ul>
                <a href="#!" class="dropUp">Acciones ↑</a>

            </div>
        </div>
    <?php } ?>
    </div>




</body>

</html>