<?php

//Crea una función que ordene un array de clave-valor. La función tendrá 3 parámetros,
//el vector, el orden que queremos (ascendiente o descendiente) y el elemento que se
//utiliza para ordenar (la clave o el valor).
function array_clave_valor($array,$orden,$tipo){

    if ($orden == 'asc'){
        $array_2 = sort($array);
    }else if($orden == 'desc'){
        $array_2 = rsort($array);
    }

    if($tipo == 'clave') {
       $array_2 = asort($array);


   }elseif ($tipo == 'valor') {
        $array_2 = ksort($array);
   }

    print_r ($array);
    return $array;
}

array_clave_valor(["ladrillo"=>"rojo", "cielo"=>"azul", "noche"=>"negro"], 'desc','valor');