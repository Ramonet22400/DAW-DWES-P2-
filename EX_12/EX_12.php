<?php

function primus ($numero){

    $resultado = $numero / 2;

    if($resultado == is_int($resultado)){

        echo ("El numero no es primo");

    }else {

        echo("El numero es primo");
    }
}

$numero = 1;

primus($numero);