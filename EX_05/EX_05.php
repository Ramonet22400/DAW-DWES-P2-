<?php

//Dibuje un conjunto de asteriscos con bucles en PHP que devuelva el siguiente
//resultado

for($i=0; $i<9; $i++) {
    for($x= 0; $x < $i; $x++){
        echo('*');
    }
    echo('<br>');
}

for ($i=9; $i> 0; $i--){
    for($j = 0; $j < $i; $j++){

        echo('*');
    }
    echo('<br>');
}
