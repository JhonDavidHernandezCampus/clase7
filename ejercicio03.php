<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-        F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ejercico_3 php</title>
</head>
<body>
    <?php
    //Arreglos complejos
    $datos = [
        30=>'papa',
        'dos'=>'Hola',
        1=>'para la',
        4=>'no te preocupes',
        'uno'=>'ya voy',
        0=>'la casa',
    ];

    echo "$datos[dos] $datos[30] $datos[4] $datos[uno] $datos[1] $datos[0]";

    //imprimir el arreglo con un foreach

    foreach ($datos as $key => $value) {
        echo "$key - $value";
    }



    ?>
</body>
</html>