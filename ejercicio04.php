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
    //operadores aritmeticos
    //opradores logicos: and y or
   $color ='rojo';
   
    if ($color == 'rojo') {
    echo "<span class='text text-danger'>el color es rojo</span>";
   }else {
    echo " el color no es rojo";
   }"<br><br>";

   //dados 3 nuemeros en variables , determinar e imprimir cual es el numero mayor o si los 3 son iguales
   $num1 = 1;
   $num2 = 1;
   $num3 = 1;


   
   if ($num1 > $num2 and $num1 > $num3) {
    echo "<span class='text text-danger'>el numero mayor es $num1</span>";
   }elseif ($num2 > $num3 and $num2 > $num1) {
    echo "<span class='text text-danger'>el numero mayor es $num2</span>";
   }elseif($num3 > $num1 and $num3 > $num2){
    echo "<span class='text text-danger'>el numero mayor es $num3</span>";
   }else{
    echo "<span class='text text-danger'>los tres numeros son iguales </span>";
   
    }

    ?>

</body>
</html>