<?php

//Escriba un programa que indique la longitud máxima y mínima de un array de cadenas
//de texto.

$f1=array("casa", "parachoques", "pan", "azul");
$max= 0;
$min= 20;
$palabra_larga= "0";
$palabra_corta= "0";

foreach ($f1 as $palabra) {
    echo $palabra . ' ';
    echo strlen($palabra);
    echo '</br>';

    if ($max < strlen($palabra)) {
        $palabra_larga = $palabra;
        $max = strlen($palabra);
    }

    if ($min > strlen($palabra)) {
        $palabra_corta = $palabra;
        $min = strlen($palabra);
    }

}


echo('La palabra mas larga es: ' . $max . " $palabra_larga");
echo ('<br>');
echo('La palabra mas corta es: ' . $min . " $palabra_corta");


