<?php
    declare(strict_types = 1);

    require_once("clases/MiClases.php");

    $objeto = new ClaseHija;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<body>
    <p>
        <?php
            echo $objeto->mostrarPropiedades();
        ?>
    </p>
</body>
</html>