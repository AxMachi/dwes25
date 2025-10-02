<?php
$personas = [   ['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],
                ['nombre'=>'Cristina', 'altura'=>162, 'email'=>'crisitina@correo.com'],
                ['nombre'=>'Pepe', 'altura'=>179, 'email'=>'pepe@correo.com'],
                ['nombre'=>'Maria', 'altura'=>180, 'email'=>'maria@correo.com'],
                ['nombre'=>'Juan', 'altura'=>192, 'email'=>'juan@correo.com'],
            ];

echo "<table border=1>";

echo "<tr>";
foreach ($personas[0] as $key2 => $value2) {
    echo "<th>$key2</th>";
}
echo "</tr>";

foreach ($personas as $person) {
    echo "<tr>";
    foreach ($person as $value2) {
        echo "<th>$value2</th>";
    }
    echo "</tr>";
}


echo "</table>";

?>