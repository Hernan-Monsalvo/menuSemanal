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



        <h1 class="titulo">Seleciona a que mes y semana corresponde:</h1>

        <div class="inputs">

            <form action="crearMenu.php" method="POST">

                <input type="text" name="mes" id="mes" placeholder="Mes" required>

                <input type="number" name="semana" id="semana" placeholder="Semana" required>

                <input type="password" name="pass" id="pass" placeholder="Contraseña" oninput="Pass()" required> 



                <input type="hidden" name="sab1" value="" class="dia">
                <input type="hidden" name="sab2" value="" class="dia">
                <input type="hidden" name="dom1" value="" class="dia">
                <input type="hidden" name="dom2" value="" class="dia">
                <input type="hidden" name="lun" value="" class="dia">
                <input type="hidden" name="mar" value="" class="dia">
                <input type="hidden" name="mie" value="" class="dia">
                <input type="hidden" name="jue" value="" class="dia">
                <input type="hidden" name="vie" value="" class="dia">


                <button type="submit" name="nuevoMenu" id="submit" disabled>Crear!</button>


            </form>
        </div>

        <div class="ultimo titulo">

            <?php
            $query = "select max(ID) from menu_semanal";
            $result_tasks = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result_tasks);
            $ID = $row["max(ID)"];

            $query = "select * from menu_semanal where ID= '$ID'";
            $result_tasks = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result_tasks);
            ?>

            <h2>Ultimo menu registrado: <?php echo $row["semana"] ?>° sem de <?php echo $row["mes"] ?></h2>

        </div>



        <div class="botones">

            <a href="index.php" class="volver">Volver</a>

        </div>

    </div>

    <footer id="footer">

        H.Monsalvo 2020 © Todos los derechos reservados

    </footer>


    <script src="js/crear-menu.js"></script>
    <script src="js/password.js"></script>
</body>

</html>