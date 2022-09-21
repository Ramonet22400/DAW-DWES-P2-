<?php

//Crea una función que compruebe si todos los caracteres del string se encuentran en
//mayúsculas.

function ma($texto){

    if($texto==strtoupper($texto)){

        echo("La cadena contiene mayusculas.");

    } else {

        echo("La cadena no contiene mayusculas.");
    }

}

$texto = "HOLA";

ma($texto);