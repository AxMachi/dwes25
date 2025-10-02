<?php

function esPar(int $num): bool{

    if ($num % 2 === 0) {
        return true;
        echo "Es par";
    } else {
        return false;
        echo "No es par";
    }

};

function arrayAleatorio(int $tam, int $min, int $max) : array{
    for ($x=0; $x < $tam; $x++) { 
        $array = [rand($min,$max)];
    }
    return $array;
}

function arrayPares(array $array): int{
    $recuento = 0;

    foreach ($array as $key) {
        if ($key % 2 === 0) {
            $recuento++;
        }
    }

    return $recuento;
}

?>