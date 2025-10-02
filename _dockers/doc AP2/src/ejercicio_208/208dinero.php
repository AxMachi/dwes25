<?php

$dinero = 139;
$divisas = [500, 200, 100, 50, 20, 10, 5, 2, 1];

foreach ($divisas as $valor) {
    $cantidad = intdiv($dinero, $valor);
    $dinero -= $cantidad * $valor;

    if ($cantidad > 0) {
        if ($valor > 2) {
            echo $cantidad . " billete de $valor<br>";
        } else {
            echo $cantidad . " moneda de $valor<br>";
        }
    }
}
