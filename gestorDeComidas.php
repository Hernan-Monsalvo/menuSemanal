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



    <div class="container nMenu">



        <div class="nav">
            <button class="tab" onclick="activar('#listaVerduleria')">
                <img src="https://img.icons8.com/color/48/000000/no-meat.png" /></button>
            <button class="tab" onclick="activar('#listaCarniceria')">
                <img src="https://img.icons8.com/dusk/64/000000/kawaii-steak.png" /></button>
            <button class="tab" onclick="activar('#listaChino')">
                <img src="https://img.icons8.com/fluent/48/000000/delivery-scooter.png" /></button>
        </div>



        <div id="listaChino" class="tabContent activo">
            <h1 class="tituloLista">Viernes!</h1>
            <div class="lista">
                <table>


                    <?php include 'db-menu.php';

                    $result_tasks = mysqli_query($conn, "select * from delivery");
                    while ($row = mysqli_fetch_array($result_tasks)) { ?>



                        <tr>
                            <td><?php echo $row["Plato"] ?></td>
                            <td><a href="editarComida.php?Plato=<?php echo $row["Plato"] ?>&Tabla=plato_carn"><img src="https://img.icons8.com/cute-clipart/64/000000/edit.png" /></a></td>
                            <td><a href="#!" onclick='eliminar("<?php echo $row["Plato"] ?>", "delivery")'>
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/delete.png" /></a></td>
                        </tr>

                    <?php } ?>
                    <tr>
                        <td>Agregar Nuevo Plato</td>
                        <td><a href="nuevoPlato.php?Tabla=delivery"><img src="https://img.icons8.com/cute-clipart/64/000000/add-to-inbox.png" /></a></td>
                    </tr>

                </table>

            </div>





        </div>

        <div id="listaCarniceria" class="tabContent">
            <h1 class="tituloLista">Con carne</h1>
            <div class="lista">

                <table>


                    <?php include 'db-menu.php';

                    $result_tasks = mysqli_query($conn, "select * from plato_carn");
                    while ($row = mysqli_fetch_array($result_tasks)) { ?>



                        <tr>
                            <td><?php echo $row["Plato"] ?></td>
                            <td><a href="editarComida.php?Plato=<?php echo $row["Plato"] ?>&Tabla=plato_carn"><img src="https://img.icons8.com/cute-clipart/64/000000/edit.png" /></a></td>
                            <td><a href="#!" onclick='eliminar("<?php echo $row["Plato"] ?>", "plato_carn")'><img src="https://img.icons8.com/cute-clipart/64/000000/delete.png" /></a></td>
                        </tr>

                    <?php } ?>
                    <tr>
                        <td>Agregar Nuevo Plato</td>
                        <td><a href="nuevoPlato.php?Tabla=plato_carn"><img src="https://img.icons8.com/cute-clipart/64/000000/add-to-inbox.png" /></a></td>
                    </tr>

                </table>

            </div>
        </div>

        <div id="listaVerduleria" class="tabContent">
            <h1 class="tituloLista">Sin carne </h1>
            <div class="lista">

                <table>


                    <?php include 'db-menu.php';
                    $result_tasks = mysqli_query($conn, "select * from plato_vegg");
                    while ($row = mysqli_fetch_array($result_tasks)) { ?>



                        <tr>
                            <td><?php echo $row["Plato"] ?></td>
                            <td><a href="editarComida.php?Plato=<?php echo $row["Plato"] ?>&Tabla=plato_vegg"><img src="https://img.icons8.com/cute-clipart/64/000000/edit.png" /></a></td>
                            <td><a href="#!" onclick='eliminar("<?php echo $row["Plato"] ?>", "plato_vegg")'><img src="https://img.icons8.com/cute-clipart/64/000000/delete.png" /></a></td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <td>Agregar Nuevo Plato</td>
                        <td><a href="nuevoPlato.php?Tabla=plato_vegg"><img src="https://img.icons8.com/cute-clipart/64/000000/add-to-inbox.png" /></a></td>
                    </tr>
                </table>

            </div>
        </div>

        <script>
            function eliminar(plato, tabla) {
                Swal.fire({
                    title: 'Realmente quieres eliminar: ' + plato + '?',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: `Eliminar`,
                    denyButtonText: `No eliminar`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.replace("eliminarComida.php?Plato=" + plato + "&Tabla=" + tabla, "eliminando");
                    } else if (result.isDenied) {
                        // Swal.fire('No se ha eliminado', '', 'info')
                    }
                });
            }
        </script>


        <script src="js/tabs.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <div class="boton volver">
            <a href="nuevoMenu.php" class="volver">Volver</a>
        </div>

    </div>

</body>

</html>