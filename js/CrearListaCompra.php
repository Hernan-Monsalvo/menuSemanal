<script>
    var ListaGeneral = [];

    <?php include 'db-menu.php';
    //por cada comida en la bd corre un bucle comparando con las comidas en el menu, si es igual agrega ingredientes a ListaGeneral.
    //el total de platos en bd(40 aprox) se recorren 9 veces (360 comparaciones aprox).    
    $result_tasks = mysqli_query($conn, "select * from plato_vegg union select * from plato_carn union select * from delivery");
    while ($row = mysqli_fetch_array($result_tasks)) { ?>


        Comidas.forEach(element => {

            if (element == "<?php echo $row["Plato"] ?>") {

                ListaGeneral.push("<?php echo $row["Lista"] ?>");
            }
        });

    <?php } ?>

    var ListaSeparada = [];
    //dos foreach anidados.
    ListaGeneral.forEach(element => {
        //cada lista de ingredientes se separa en un array.
        let tmp = element.split("-");

        tmp.forEach(e => {
            //se recorre el array resultante y se agrega a ListaSeparada.
            ListaSeparada.push(e);

        });
    });

    var listaChino = [];
    var listaCarniceria = [];
    var listaVerduleria = [];
    //cada ingrediente viene con la primer letra segun a que lista va (V=Verduleria),(C=Chino),(X=Carniceria).
    //con el substring le quito la primer letra y agrego el ingrediente a la lista correspondiente.
    ListaSeparada.forEach(element => {

        if (element.charAt(0) == "V") {
            listaVerduleria.push(element.substring(1, element.lenght));
        }
        if (element.charAt(0) == "C") {
            listaChino.push(element.substring(1, element.lenght));
        }
        if (element.charAt(0) == "X") {
            listaCarniceria.push(element.substring(1, element.lenght));
        }

    });


    //elimino los repetidos de las listas
    var listaChino2 = [...new Set(listaChino)];
    var listaCarniceria2 = [...new Set(listaCarniceria)];
    var listaVerduleria2 = [...new Set(listaVerduleria)];

    //ordeno alfabeticamente
    listaChino2.sort();
    listaCarniceria2.sort();
    listaVerduleria2.sort();

    //selecciono los 3 divs
    panelChino = document.querySelector("#listaChino .lista");
    panelCarniceria = document.querySelector("#listaCarniceria .lista");
    panelVerduleria = document.querySelector("#listaVerduleria .lista");

    //foreach para rellenar la lista del chino
    listaChino2.forEach(element => {

        //let li = document.createElement("li");
        let inp = document.createElement('input'); //creo un input
        inp.type = 'checkbox'; //le pongo tipo
        let txt = document.createTextNode(element); //creo nodo de texto(tomo string del array)
        let label = document.createElement('label'); //creo label

        label.appendChild(inp); //meto el input en el label
        label.appendChild(txt); //le meto texto al label
        panelChino.appendChild(label); //agrego label con todo adentro al div de la lista


    });

    listaCarniceria2.forEach(element => {

        let inp = document.createElement('input');
        inp.type = 'checkbox';
        let txt = document.createTextNode(element);
        let label = document.createElement('label');


        label.appendChild(inp);
        label.appendChild(txt);
        panelCarniceria.appendChild(label);

    });

    listaVerduleria2.forEach(element => {

        let inp = document.createElement('input');
        inp.type = 'checkbox';
        let txt = document.createTextNode(element);
        let label = document.createElement('label');

        label.appendChild(inp);
        label.appendChild(txt);
        panelVerduleria.appendChild(label);


    });
</script>