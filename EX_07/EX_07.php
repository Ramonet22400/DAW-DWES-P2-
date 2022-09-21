
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
         <style>

             th,td,tr{
                 padding: 15px;
                 background-color: black;

             }

         </style>

        <tr>
            <?php

                for($indice = 0; $indice <= 8; $indice++){

                    for($fila = 0; $fila <=8; $fila++){
                        echo('&nbsp&nbsp&nbsp&nbsp');
                        echo('<td>');

                    }

                    for ($columna = 0; $columna <=8; $columna++){
                        echo('&nbsp&nbsp&nbsp&nbsp');
                        echo('<tr>');

                    }
                }


            ?>
        </tr>

</table>
</body>
</html>