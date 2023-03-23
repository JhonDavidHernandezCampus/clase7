<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-        F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ejercico_2 php</title>
</head>
<body>
    <?php
    //Arreglos
    $arreglo=[3,30,50,88,1];

    echo "$arreglo[2]<br><br>";

    $color=['amarillo','rojo','azul','verde','naranja'];

    echo "<p class='text text-warning'>$color[0]</p>";
    echo "<p class='text text-danger'>$color[1]</p>";
    echo "<p class='text text-primary'>$color[2]</p>";
    echo "<p class='text text-success'>$color[3]</p>";

    for( $i=0 ; $i < (count($color)); $i++){
        echo  "<h6>$color[$i]</h6>";
    }



    ?>
</body>
</html>