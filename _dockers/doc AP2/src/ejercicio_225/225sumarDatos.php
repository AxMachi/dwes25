<?php

$cantidad = $_GET['cantidad'];

$resultado = 0;

for ($i=0; $i < $cantidad; $i++) { 
    $resultado += $_GET["caja$i"];
}

echo $resultado;

?>