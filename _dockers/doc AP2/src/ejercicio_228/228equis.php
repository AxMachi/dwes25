<?php

$filas = $_GET['filas'];

$columnas = $_GET['columnas'];

echo '<table border="1">';

for ($i=1; $i <= $columnas; $i++) { 
    if ($i == 1 || $i == count($columnas)) {
        echo "<tr>";
        for ($x=1; $x <= $filas; $x++) {
            if ($x == 1 || $x == count($filas)) {
                echo "<th>#</th>";
            }else{
                echo "<th>1</th>";
            }
        }
        echo "</tr>";
    } else {
        echo "<tr>";
        for ($x=1; $x <= $filas; $x++) { 
            if ($x == 1 || $x == count($filas)) {
                echo "<th>#</th>";
            }else{
                echo "<th>1</th>";
            }
        }
        echo "</tr>";
    }
    
}

echo "</tabla>"

?>

