<?php
    // CREAR ARREGLOS

    $numeros = [1,2,3,4,5];
    $sucesiones = array(6,7,8,9,0);

    echo $numeros[3]. "<br/>";

    // IMPRIMIR ARREGLOS
    var_dump($numeros);
    print_r($sucesiones);

    $alumnos = array(
        array("angel", 15, "A+"),
        array("juan", 25, "O"),
        array("saira", 20, "O"),
        array("daniel", 16, "O")
    );

    var_dump($alumnos);
?>