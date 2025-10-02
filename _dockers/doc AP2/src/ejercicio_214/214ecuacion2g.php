<?php
$a = 2;
$b = 8;
$c = 1;

if (is_nan(sqrt(($b*$b)-(4*$a*$c)))) {
    echo "No es posible realizar la operación";
} else {
    echo (-$b + sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    echo "<br>";
    echo (-$b - sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
}

?>