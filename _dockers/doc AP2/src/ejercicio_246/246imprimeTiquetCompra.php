<?php

include("246preparaTiquetCompra.php");
include("../ejercicio_245/245euros.php");

$sumaTotal = 0;

echo "<table border=1>";

echo "
    <tr>
    <th>Producto</th>
    <th>Precio en €</th>
    <th>Precio en pesetas</th>
    </tr>
";

foreach ($tienda as $key => $value) {
    echo "
        <tr>
        <td>$key</td>
        <td>$value</td>
        <td>".euros2pesetas($value)."</td>
        </tr>
    ";
    $sumaTotal += $value;
}

echo "<tr>
        <th>Tutotal es de: </th>
        <th>$sumaTotal €</th>
        <th>".euros2pesetas($sumaTotal)."</th>
    </tr>";

echo "</table>";

?>