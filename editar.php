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



        <div class="detalle editar">
            <?php
            $id = $_GET["id"];

            $query = "select * from menu_semanal where ID= '$id'";
            $result_tasks = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_tasks)) {
            ?>
                <h2 class="titulo">Editar la <?php echo $row["semana"] ?>° sem de <?php echo $row["mes"] ?> </h2>
                <form action="edicion.php" id="formulario" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row["ID"] ?>">
                    <div><strong>sab-alm.:</strong>
                        <select name="sab1" class="dia" size="1"> <?php echo $row["sabado_almuerzo"] ?>
                            <option value="<?php echo $row["sabado_almuerzo"] ?>" selected><?php echo $row["sabado_almuerzo"] ?></option>
                        </select>
                    </div>
                    <div><strong>sab-cen.:</strong>
                        <select name="sab2" class="dia" size="1"> <?php echo $row["sabado_cena"] ?>
                            <option value="<?php echo $row["sabado_cena"] ?>" selected><?php echo $row["sabado_cena"] ?></option>
                        </select>
                    </div>
                    <div><strong>dom-alm.:</strong>
                        <select name="dom1" class="dia" size="1"> <?php echo $row["domingo_almuerzo"] ?>
                            <option value="<?php echo $row["domingo_almuerzo"] ?>" selected><?php echo $row["domingo_almuerzo"] ?></option>
                        </select>
                    </div>
                    <div><strong>dom-cen.:</strong>
                        <select name="dom2" class="dia" size="1"> <?php echo $row["domingo_cena"] ?>
                            <option value="<?php echo $row["domingo_cena"] ?>" selected><?php echo $row["domingo_cena"] ?></option>
                        </select>
                    </div>
                    <div><strong>lunes.:</strong>
                        <select name="lun" class="dia" size="1"> <?php echo $row["lunes"] ?>
                            <option value="<?php echo $row["lunes"] ?>" selected><?php echo $row["lunes"] ?></option>
                        </select>
                    </div>
                    <div><strong>martes.:</strong>
                        <select name="mar" class="dia" size="1"> <?php echo $row["martes"] ?>
                            <option value="<?php echo $row["martes"] ?>" selected><?php echo $row["martes"] ?></option>
                        </select>
                    </div>
                    <div><strong>miercoles.:</strong>
                        <select name="mie" class="dia" size="1"> <?php echo $row["miercoles"] ?>
                            <option value="<?php echo $row["miercoles"] ?>" selected><?php echo $row["miercoles"] ?></option>
                        </select>
                    </div>
                    <div><strong>jueves.:</strong>
                        <select name="jue" class="dia" size="1"> <?php echo $row["jueves"] ?>
                            <option value="<?php echo $row["jueves"] ?>" selected><?php echo $row["jueves"] ?></option>
                        </select>
                    </div>
                    <div><strong>viernes.:</strong>
                        <select name="vie" class="dia" size="1"> <?php echo $row["viernes"] ?>
                            <option value="<?php echo $row["viernes"] ?>" selected><?php echo $row["viernes"] ?></option>
                        </select>
                    </div>
                </form>
        </div>

        <div class="botones">
            <a href="detalleMenu.php?id=<?php echo $row["ID"] ?>">Volver</a>

            <button type="submit" form="formulario" name="editar_menu">Guardar</button>

        </div>
    <?php } ?>


    </div>


    <?php include 'js/editor.php'; ?>
    <script src="js/editar.js"></script>
</body>

</html>