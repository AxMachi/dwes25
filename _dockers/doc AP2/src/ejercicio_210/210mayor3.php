<?php

$a = 1;
$b = 2;
$c = 10;

if ($a > $b) {
    if ($a > $c) {
        echo "a es mayor";
    } else {
        echo "c es mayor";
    }
} else {
    if ($b > $c) {
        echo "b es mayor";
    } else {
        echo "c es mayor";
    }
}

?>