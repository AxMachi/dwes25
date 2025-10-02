<?php

$tamanno =   [
                'filas' => 6,
                'columnas' => 9,
            ];

echo '<table border="1">';

for ($i=1; $i <= $tamanno["columnas"]; $i++) { 
    echo "<tr>";
    for ($x=1; $x <= $tamanno["filas"]; $x++) { 
        if ($i === 1) {
            echo '<th style="background-color: blue;">'.random_int(100,999)."</th>";
        } else {
            if ($x === 1) {
                echo '<th style="background-color: green;">'.random_int(100,999)."</th>";
            } else {
                echo "<th>".random_int(100,999)."</th>";
            }
        }
        
    }
    echo "</tr>";
}



echo "</tabla>"

?>