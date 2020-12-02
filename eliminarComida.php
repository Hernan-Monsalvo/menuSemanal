<?php
include 'db-menu.php';


$plato = $_GET["Plato"];
$tabla = $_GET["Tabla"];

$query = "delete from `$tabla` where Plato= '$plato'";
$result_tasks = mysqli_query($conn, $query);

header("Location: gestorDeComidas.php");