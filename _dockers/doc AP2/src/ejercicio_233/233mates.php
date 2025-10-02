<?php

$elementos = [];
$mayor = 0;
$menor = 10;
$medio = 0;

for ($i=0; $i < 32; $i++) { 
    $elementos[$i] = rand(0,100);
}

for ($x=0; $x < count($elementos); $x++) { 
    if ($mayor <= $x) {
        $mayor = $elementos[$x];
    }
    if ($menor >= $x) {
        $menor = $elementos[$x];
    }
        $medio =+ $elementos[$x];
}

echo "El numero mayor de los elementos es: ".$mayor;
echo "<br><br>";
echo "El numero menor de los elementos es: ".$menor;
echo "<br><br>";
echo "La media de todos los elementos son: ".($medio / count($elementos));
echo "<br><br>";

foreach ($elementos as $key) {
    echo $key.", ";
}

?>