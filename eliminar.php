<?php
include 'db-menu.php';


$id = $_GET["id"];

$query = "delete from menu_semanal where ID= '$id'";
$result_tasks = mysqli_query($conn, $query);

header("Location: historial.php");