<?php

$filas = $_GET['filas'];

$columnas = $_GET['columnas'];

echo '<table border="1">';

for ($i=1; $i <= $columnas; $i++) { 
    echo "<tr>";
    for ($x=1; $x <= $filas; $x++) { 
        echo "<th>$x</th>";
    }
    echo "</tr>";
}

echo "</tabla>"

?>

