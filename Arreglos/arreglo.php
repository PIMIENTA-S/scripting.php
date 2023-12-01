<?php

    $cadena = '';
    $arreglo = [];
    $videojuegos = ["FIFA", "Fornite", "Free", "COD", 
    "Skullgirls", "GTA", "Pokemon"];

    // ARREGLO VACIO
    // Devuelve un booleano

    var_dump(empty($arreglo));

    // EXISTE ALGUN ELEMENTO

    var_dump(isset($arreglo));

    // Tambien se puede acceder por la pocision

    var_dump(isset($arreglo[3]));

    // CONTAR ELEMENTOS

    echo count($videojuegos);

    // ORDENAR ARREGLOS

    #sort($videojuegos);
    var_dump($videojuegos);

    // ORDENAR SIN PERDER EL INDICE ORIGINAL

    asort($videojuegos);
    var_dump($videojuegos);

    // ORDENAR DE MANERA INVERSA

    rsort($videojuegos);

    // ORDENAR DE MANERA INVERSA SIN PERDER INDICE

    arsort($videojuegos);

    // SUMAR VALORES DEL ARREGLO
    
    $numero = array(1,2,3,4,5,6,7,8,9);
    $suma = array_sum($numero);
    echo $suma;

    // COMPARAR ARREGLOS

    $salon1 = ['a1' => "angell", 'a2' => "daniel", 'a3' => "jesus", 'a4' => "kevin"];
    $salon2 = ['a1' => "alejandro", 'a2' => "felipe", 'a3' => "jesus", 'a4' => "kevin", 'a5' => "nicolle"];

    
    $diferencia = array_diff($salon1, $salon2);
    var_dump($diferencia);

    // DIVIDIR ARREGLOS
    // El primer parametro es el arreglo y el segundo cada cuanto se romperta el arreglo

    $dividir = array_chunk($videojuegos, 2);
    var_dump($dividir);

    // DIVIDIR ARREGLOS Y ELIMINAR PARTE DE EL
    // Arreglo y apartir de donde
    // Elimina lo que esta antes de ese indice

    var_dump(array_slice($videojuegos, 3));

    // UNIR ARREGLOS

    $fruta = ['manzana', 'pera', 'uva', 'patilla'];
    $verdura = ['lechuga', 'pimenton', 'tomate'];

    $unir = array_merge($fruta, $verdura);

    var_dump($unir);

    // ELIMINAR EL ULTIMO ELEMENTO 

    array_pop($unir);
    var_dump($unir);

    // AGREGAR ELEMENTO AL FINAL
    // Arreglo y luego elemento que se quiere añadir

    array_push($unir, 'ANGELL');
    var_dump($unir);

    // BUSCAR ELEMENTO
    // elemento que se quiere buscar y arreglo

    $notas = array(3.5,2.2,2,3,4,5,4.5);

    $buscar = array_search(2, $notas);
    var_dump($buscar);




?>