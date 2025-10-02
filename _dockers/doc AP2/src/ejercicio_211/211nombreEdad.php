
<?php

$eada = 20;

switch ($edad) {
    case 3 > $edad:
        echo "Es un bebé";
        break;
    case 3 < $edad && 12 > $edad:
        echo "Es un niño";
        break;
    case 13 < $edad && 17 > $edad:
        echo "Es un adolescente";
        break;
    case 18 < $edad && 66 > $edad:
        echo "Es un adulto";
        break;
    case 67 < $edad:
        echo "Es un jubilado";
        break;
}
?>