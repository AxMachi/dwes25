<?php

$dinero = 139;
$divisas = [500, 200, 100, 50, 20, 10, 5, 2, 1];
$cartera = [
            '500' => 0,
            '200' => 0,
            '100' => 0,
            '50' => 0,
            '20' => 0,
            '10' => 0,
            '5' => 0,
            '2' => 0,
            '1' => 0,
            ];

foreach ($divisas as $valor) {
    $cantidad = intdiv($dinero, $valor);
    $dinero -= $cantidad * $valor;

        if ($cantidad > 0) {
        $cartera[$valor] = $cantidad;
    }

}

foreach ($cartera as $key) {
    if ($key != 0) {
        echo "<li>$key</li>";
    }
}


