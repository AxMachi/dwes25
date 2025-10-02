<?php

$sum = 3;

echo "<table border = 1>";
echo "<head><th><tr></tr> <tr></tr> <tr></tr> <tr></tr> <tr></tr> <tr></tr></th></head>";

for ($i=0; $i < 10; $i++) { 
    echo "<tr><td>$sum</td> <td></td> <td>$i</td> <td>=</td> <td>".$sum*$i."</td></tr>";
}

?>