<script>
var Plato_vegg = [];
<?php include 'db-menu.php'; 

$result_tasks = mysqli_query($conn, "select * from plato_vegg");
while ($row = mysqli_fetch_array($result_tasks)){ ?>
    Plato_vegg.push("<?php echo $row["Plato"] ?>");  
<?php } ?>


var nv = Plato_vegg.length - 1;

var Plato_carn = [];
<?php 
$result_tasks = mysqli_query($conn, "select * from plato_carn");
while ($row = mysqli_fetch_array($result_tasks)){ ?>
    Plato_carn.push("<?php echo $row["Plato"] ?>");  
<?php } ?>

var nc = Plato_carn.length - 1;


var Delivery = [];
<?php 
$result_tasks = mysqli_query($conn, "select * from delivery");
while ($row = mysqli_fetch_array($result_tasks)){ ?>
    Delivery.push("<?php echo $row["Plato"] ?>"); 
<?php } ?>

var nd = Delivery.length - 1;

var Plato = [
//sabado
Plato_vegg[aleatorio(nv)],
Plato_vegg[aleatorio(nv)],
//domingo
Plato_carn[aleatorio(nc)],
Plato_vegg[aleatorio(nv)],
//lunes
Plato_vegg[aleatorio(nv)],
//martes
Plato_vegg[aleatorio(nv)],
//miercoles
Plato_carn[aleatorio(nc)],
//jueves
Plato_vegg[aleatorio(nv)],
//viernes
Delivery[aleatorio(nd)]

];



//evitar repetidos:

while (Plato[1] == Plato[0]) {

Plato[1] = Plato_vegg[aleatorio(nv)];

}

while (Plato[3] == Plato[0] || Plato[3] == Plato[1]) {

Plato[3] = Plato_vegg[aleatorio(nv)];

}

while (Plato[4] == Plato[0] || Plato[4] == Plato[1] || Plato[4] == Plato[3]) {

Plato[4] = Plato_vegg[aleatorio(nv)];

}

while (Plato[5] == Plato[0] || Plato[5] == Plato[1] || Plato[5] == Plato[3] || Plato[5] == Plato[4]) {

Plato[5] = Plato_vegg[aleatorio(nv)];

}

while (Plato[7] == Plato[0] || Plato[7] == Plato[1] || Plato[7] == Plato[3] || Plato[7] == Plato[4] || Plato[7] == Plato[5]) {

Plato[7] = Plato_vegg[aleatorio(nv)];

}

while (Plato[6] == Plato[2]) {

Plato[6] = Plato_carn[aleatorio(nc)];

}


var dia = document.getElementsByClassName("dia");

for (let i = 0; i < Plato.length; i++) {

dia[i].value = Plato[i];

}

function aleatorio(n) {
return Math.round(Math.random() * n);

}


</script>