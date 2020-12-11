
<script>

var Plato_vegg = [];
<?php include 'db-menu.php'; 

$result_tasks = mysqli_query($conn, "select * from plato_vegg");
while ($row = mysqli_fetch_array($result_tasks)){ ?>
    Plato_vegg.push("<?php echo $row["Plato"] ?>");  
<?php } ?>


var Plato_carn = [];
<?php 
$result_tasks = mysqli_query($conn, "select * from plato_carn");
while ($row = mysqli_fetch_array($result_tasks)){ ?>
    Plato_carn.push("<?php echo $row["Plato"] ?>");  
<?php } ?>


var Delivery = [];
<?php 
$result_tasks = mysqli_query($conn, "select * from delivery");
while ($row = mysqli_fetch_array($result_tasks)){ ?>
    Delivery.push("<?php echo $row["Plato"] ?>"); 
<?php } ?>


</script>