<?php

$cantidad = $_GET['cantidad'];

echo '<form action="225sumarDatos.php" method="GET">';

for ($i = 1; $i <= $cantidad; $i++) {
    echo "<input type='hidden' name='caja$i' value='$i'></imput><br>";
}

echo '<input type="submit" value="Sumar valores de los campos">';
echo "</form>"

?>
