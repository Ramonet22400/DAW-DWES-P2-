<?php
$alumnos = ['Guillem', 'Joel', 'Pol', 'Hugo', 'Alejandro', 'Christian', 'Sergio', 'Alex'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title> Alumnos </title>
</head>
<body>
    <h1>Lista alumnos</h1>
    <ul>
        <?php

            foreach($alumnos as $alumno){
                echo '<li>' .$alumno. '</li>';
            }
            echo '<br>';

            echo 'El numero de alumnos es: ', count($alumnos);

        ?>
    </ul>
</body>
</html>