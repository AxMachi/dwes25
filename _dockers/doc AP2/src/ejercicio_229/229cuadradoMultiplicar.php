<?php

$filas = 10;

$columnas = 10;

echo '<table border="1">';


for ($i=-1; $i <= $columnas; $i++) {
    echo "<tr>";
    if ($i==-1) {
        for ($j=-1; $j < 11; $j++) { 
            if ($j == -1) {
                echo "<th>X</th>";
            } else {
                echo "<th>".$j."</th>";
            }     
        }
    } else {
        for ($x=-1; $x <= $filas; $x++) {
            if ($x==-1) {
                    echo "<th>".$i."</th>";
            } else{
                echo "<th>".$x * $i."</th>";
            }
        }
    }
    
    
    echo "</tr>";
}

echo "</tabla>"

?>
