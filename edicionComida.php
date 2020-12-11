<?php
include 'db-menu.php';

if(isset($_GET["Lista"])){
    $lista = $_GET["Lista"];
    $plato = $_GET["Plato"];
    $tabla = $_GET["Tabla"];

    
    $query = "update `$tabla` set Lista = '$lista' where Plato= '$plato'";
 

    $result = mysqli_query($conn, $query);
    if (!$result){
        die(mysqli_error($conn));
    }

    header("Location: gestorDeComidas.php");
    
}