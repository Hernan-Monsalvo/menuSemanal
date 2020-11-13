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

            $query = "select * from menu_semanal order by ID desc";
            $result_tasks = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_tasks)) {
            ?>

                <div class="semana">
                    <a href="detalleMenu.php?id=<?php echo $row["ID"] ?>">
                        <h2 class="titulo">Menu de la <?php echo $row["semana"] ?>° sem de <?php echo $row["mes"] ?> </h2>

                        <table>
                            <tr>
                                <td><?php echo $row["sabado_almuerzo"] ?></td>
                                <td><?php echo $row['sabado_cena']; ?></td>
                                <td><?php echo $row['domingo_almuerzo']; ?></td>
                            </tr>

                            <tr>
                                <td><?php echo $row['domingo_cena']; ?></td>
                                <td><?php echo $row['lunes']; ?></td>
                                <td><?php echo $row['martes']; ?></td>
                            </tr>

                            <tr>
                                <td><?php echo $row['miercoles']; ?></td>
                                <td><?php echo $row['jueves']; ?></td>
                                <td><?php echo $row['viernes']; ?></td>
                            </tr>

                        </table>
                    </a>
                </div>



            <?php } ?>
        </div>

        <div class="botones">
            <a href="index.php">Volver</a>
        </div>
    </div>

    <footer id="footer">

        H.Monsalvo 2020 © Todos los derechos reservados

    </footer>

</body>

</html>