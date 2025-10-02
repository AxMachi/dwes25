<?php

$base = 2;
$exponente = 4;
$resultado = 1;

for ($i=0; $i < $exponente; $i++) { 
    $resultado *= $base;
}

echo "$resultado";

?>