
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

                for($i = 0; $i <= 2; $i++){

                    for($f = 0; $f <=9; $f++){

                        echo('<th>');
                    }

                    for ($columna = 0; $columna <=9; $columna++){

                        echo('<tr>');
                    }
                }


            ?>
        </tr>

</table>
</body>
</html>