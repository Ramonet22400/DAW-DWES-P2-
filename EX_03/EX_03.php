 <?php
                $variable = [
                "BI" => ["Nombre" => "Burundi", "Alfa" => "BI", "Code" => "108"],
                "UZ" => ["Nombre" => "Uzbekistan", "Alfa" => "UZ", "Code" => "860"],
                "MM" => ["Nombre" => "Myanmar", "Alfa" =>"MM", "Code" => "104"],
                "SY" => ["Nombre" => "Siria", "Alfa" =>"SY", "Code" => "760"],
                "LS" => ["Nombre" => "Lesoto", "Alfa" =>"LS", "Code" => "426"],
                "VE" => ["Nombre" => "Venezuela", "Alfa" =>"VE", "Code" => "862"],
                "LA" => ["Nombre" => "Laos", "Alfa" =>"LA", "Code" => "418"],
                "BF" => ["Nombre" => "Burkina Faso", "Alfa" =>"BF", "Code" => "854"],
                "LV" => ["Nombre" => "Letonia", "Alfa" =>"LV", "Code" => "428"],
                "BT" => ["Nombre" => "Bhutan", "Alfa" =>"BT", "Code" => "064"],
                ];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title> Alumnos </title>
    </head>

    <body>

        <h1>Lista de paises</h1>

            <ul>
                <?php
                foreach ($variable as $id => ["Nombre" => $nombre, "Alfa" => $alfa, "Code" => $code]){
                echo 'El país '.$nombre.' utiliza el codigo alfa-3 '.$alfa. ' con codigo numérico: '.$code.'<br>'.'<br>';
                }
                ?>
            </ul>
    </body>
</html>



