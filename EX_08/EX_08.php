<?php

//Cree una función que calcule el área de un triangulo y muéstrelo.


function triangulito($altura, $base)
{
   $resultado = $altura * $base / 2;
   echo('El area del triangulo es de: '.$resultado);

}

triangulito(20,30);
