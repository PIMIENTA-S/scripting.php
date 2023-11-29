<?php

    // VARIABLES EN PHP
    // Siempre inicia con el simbolo de peso

    $nombre = "Angell";


    // CONSTANTES
    // Palabra reservada define(constante, valor)

    define("PI", 3.1416);

    // REPRESENTACION DE DATOS

    $octal = 0755;        // 493
    $hexadecimal = 0xC4E; // 3150
    $binario = 0b1010;    // 10

    echo $octal, " ", $hexadecimal, " ", $binario."<br/>";

    // OBTENER TIPO DE DATO

    echo gettype($octal)."<br/>";

    // OBTENER TODA LA INFORMACION DE LA VARIABLE

    var_dump($hexadecimal)."<br/>";

    // COPIAR(conectar) DATOS ENTRE VARIABLES

    $variable = "Lorem ipsum";
    $newVariable = &$variable;
    $variable = "Reescribir variable";
    echo $newVariable."<br/>";

    // CONCATENAR

    $a = "123";
    $a .= "567";
    echo $a."<br/>";

    // OPERADORES DE INCREMENTO/DECREMENTO

    $valor = 15;

    // Asigna y luego incrementa
    $valorIncremento = $valor++;
    echo $valorIncremento;
    echo $valor."<br/>";
    #1516

    // Incrementa y luego asigna
    $valor = 15;

    $valorIncremento1 = ++$valor;
    echo $valorIncremento1. $valor;
    #1616





?>