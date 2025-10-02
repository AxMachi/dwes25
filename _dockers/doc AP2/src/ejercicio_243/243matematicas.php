<?php

function digitos(int $num): int{
    return strlen((string) abs($num));
}

function digitoN(int $num, int $pos): int{
    return 1;
}

?>