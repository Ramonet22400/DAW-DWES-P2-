<?php

for($i = 0; $i <= 9; $i++) {

    for($x = 0; $x < $i; $x++){
        echo('*');
    }
    for($r=10; $r > $i; $r--){
        echo ('&nbsp&nbsp&nbsp&nbsp');

    }for ($h = 0; $h < $i; $h++){
        echo('*');
    }
    echo('<br>');
}


for ($i= 9; $i> 0; $i--){
    for($j = 0; $j < $i; $j++){
        echo('*');

    }for ($a = 10; $a > $i; $a--) {
        echo('&nbsp&nbsp&nbsp&nbsp');

    }for ($v = 0; $v < $i; $v++){
        echo('*');
    }
    echo('<br>');
}

