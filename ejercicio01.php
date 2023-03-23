<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-        F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ejercico_1 php</title>
</head>
<body>
    <?php
    //Variables en php
    $nombre = "Jhon";
    $edad = 30;
    $fecha = '2003-11-24';

    //Imprimir una variable en php
    //echo $nombre;
    echo "Mi nombre es : $nombre <br><br>";
    echo "Mi nombre es : $nombre, Tengo $edad años y naci el $fecha <br><br>";
    
    echo '<span class="text text-danger">Mi nombre es </span> <span class="text text-primary">'. $nombre .'</span> <br><br>';

    /*ciclo for
    for( $i=0 ; i <= 100; $i++){
        echo  $i;
    }
    */



    ?>
</body>
</html>