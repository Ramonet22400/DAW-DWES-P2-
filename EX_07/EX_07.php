
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabla de Ajedrez</title>
</head>
<body>
<h2> Tablero de ajedrez: </h2>

<table>
            <?php

                $altura = 9;
                echo '<border = 1px>';

                for($fila = 1; $fila <= $altura; $fila++){

                    echo('<tr>');

                    for($columna = 0;  $columna <= $altura; $columna++){
                        if(($fila % 2 == 0 && $columna % 2 !=0) || ($fila % 2 !=0 && $columna % 2 == 0)){

                            echo('<td style="padding: 10px; text-align:left; background-color:black;"> </td>');

                        } else {

                            echo('<td style="padding: 10px; text-align:left; background-color:white;"> </td>');

                        }
                    }
                }
            ?>
</table>
</body>
</html>