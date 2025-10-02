<?php
$patron = '/\d+/';           // uno o más dígitos
$texto  = 'Tengo 12 perros';

if (preg_match($patron, $texto, $m)) {
    echo "Hay un número: {$m[0]}";   // "12"
}
?>