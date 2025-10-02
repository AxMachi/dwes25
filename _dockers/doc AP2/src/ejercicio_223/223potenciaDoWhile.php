<?php

$base = 2;
$exponente = 4;
$resultado = 1;
$a = 1;

do {
    $resultado *= $base;
    $a++;
} while ($a <= 10);

echo "$resultado";

?>