<!DOCTYPE html>
<html lang="es">
<head>
    <title> EX_01</title>

<body>
<h1> Bienvenidos </h1>
<style>
    table, td, th {
        border: 1px solid black;
        border-collapse: collapse;
        font-family: "Arial Black";
    }
</style>

</head>

<table>

    <tr>

    <?php
    $x = 1;
    for($x; $x <= 10; $x++) {

        echo('<tr> <td> estamos en segundo de DAW</td> </tr>');

    }
    ?>

    </tr>
</table>
</body>
</html>

