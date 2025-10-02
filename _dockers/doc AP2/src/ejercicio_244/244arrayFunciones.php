<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoplicación</title>
</head>
<body>
    <form action="244arrayFunciones.php">
        <label for="primero">Escriba el primer numero</label>
        <input type="num" name="primero" id="primero">
        <br>
        <br>
        <label for="segundo">Escriba el primer numero</label>
        <input type="num" name="segundo" id="segundo">
        <br>
        <br>
        <input type="submit" name="enviar">
    </form>
</body>
</html>


<?php

include ('244biblioteca.php');

$primerNumero = $_GET["primero"];
$segundoNumero = $_GET["segundo"];


$funciones = [  sumar($primerNumero,$segundoNumero),
                restar($primerNumero,$segundoNumero),
                multimplicar($primerNumero,$segundoNumero),
                dividir($primerNumero,$segundoNumero)
             ];

foreach ($funciones as $key) {
    echo $key."<br>";
}
?>