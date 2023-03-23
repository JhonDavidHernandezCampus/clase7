<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-        F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ejercico_4 php</title>
</head>
<body>
    <?php
    //condicionales
    $hora = date('H');

    if ($hora > 13 and $hora < 18){
        $usuario = "roo";
        $clave = "123   5";
        if ($usuario == "root" and $clave == "12345") {
            echo "";
            echo "<div class='position-relative'>
                <h2 class='text text-primary'>Sea Usted bienbenido usuario $usuario <br></h2>
                <div class='position-absolute top-0 start-50 translate-middle-x'>
                    <img src='img/Logo-UTS-1.png' alt='' class='w-50 '>
                </div>
            </div>";
        }elseif($usuario != "root" and $clave != "12345"){
            echo "El usuario y la contraseñs son incorrectas";
        }elseif($usuario != "root"){
            echo "El usuario es Incorrecto";
        }else {
            echo "La contraseña es Incorrecta";
        }
    }else{
        echo "<p class='text text-danger'> Lo siento pero no puedes ingresar en esta hora. Intentalo mas adelante</p>";
    }




   
    ?>
</body>
</html>