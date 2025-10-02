<?php

$altura =   [
            "Maria Hunpäjot" => 1.67,
            "Thomas Thurvado" => 1.72,
            "Beth Amelnabo" => 1.59,
            "Kepa Jamecho" => 1.89,
            "Espher Matragoz" => 1.70,
            ];

$alturaMed = 0;

echo "<table border=1>";

foreach ($altura as $key => $value) {
    echo "<tr>";
    echo "<th>$key</th>";
    echo "<th>$value</th>";
    echo "<tr>";
    $alturaMed += $value;
}
echo "  <tr>
            <th>Altura media</th>
            <th>".$alturaMed / count($altura)."</th>
        </tr>
";


echo "</table>";
?>  