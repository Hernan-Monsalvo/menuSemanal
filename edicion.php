<?php
include 'db-menu.php';

if(isset($_POST["editar_menu"])){
    $id = $_POST["id"];
    $sabado_almuerzo = $_POST["sab1"];
    $sabado_cena = $_POST["sab2"];
    $domingo_almuerzo = $_POST["dom1"];
    $domingo_cena = $_POST["dom2"];
    $lunes = $_POST["lun"];
    $martes = $_POST["mar"];
    $miercoles = $_POST["mie"];
    $jueves = $_POST["jue"];
    $viernes = $_POST["vie"];

    
    $query = "update menu_semanal set sabado_almuerzo = '$sabado_almuerzo', sabado_cena = '$sabado_cena',
    domingo_almuerzo = '$domingo_almuerzo', domingo_cena = '$domingo_cena', lunes = '$lunes',
    martes = '$martes', miercoles = '$miercoles', jueves = '$jueves', viernes = '$viernes' where ID= $id";
 

    $result = mysqli_query($conn, $query);
    if (!$result){
        die("query fallida");
    }


    header("Location: detalleMenu.php?id=".$id);
    
}