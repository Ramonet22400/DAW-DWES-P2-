<?php

//Crea una función que compruebe si todos los caracteres del string se encuentran en
//mayúsculas.

function ma($texto){


    if($texto == strtoupper($texto)){
        echo('Toda las letras son en mayúsculas.');

    } else if($texto == strtolower($texto)){

        echo('Todas las letras son en minúsculas.');
    }else{
        echo ('La frase contiene tanto letras en mayúscula como en minúscula');
    }
}

$texto = "hola muy buenas";

ma($texto);