<?php
include 'db-menu.php';

if(isset($_POST["nuevoMenu"])){
    $id = 0;
    $mes = $_POST["mes"];
    $semana = $_POST["semana"];
    $sabado_almuerzo = $_POST["sab1"];
    $sabado_cena = $_POST["sab2"];
    $domingo_almuerzo = $_POST["dom1"];
    $domingo_cena = $_POST["dom2"];
    $lunes = $_POST["lun"];
    $martes = $_POST["mar"];
    $miercoles = $_POST["mie"];
    $jueves = $_POST["jue"];
    $viernes = $_POST["vie"];

    
    $query = "insert into menu_semanal(ID, mes, semana, sabado_almuerzo, sabado_cena,
    domingo_almuerzo, domingo_cena, lunes, martes, miercoles, jueves, viernes) values 
    ('$id', '$mes', '$semana', '$sabado_almuerzo', '$sabado_cena', '$domingo_almuerzo',
     '$domingo_cena', '$lunes', '$martes', '$miercoles', '$jueves', '$viernes')";

    $result = mysqli_query($conn, $query);
    if (!$result){
        die("query fallida");
    }


    $query = "select max(ID) from menu_semanal";
    $result_tasks = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result_tasks);
    $id = $row["max(ID)"];
    
    header("Location: detalleMenu.php?id=".$id);
    
}