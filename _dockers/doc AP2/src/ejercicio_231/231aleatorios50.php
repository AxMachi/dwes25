<?php
$num = rand(0, 99);

$array = [];

for ($i=0; $i < 50; $i++) { 
    $array[$i] = rand(0, 99);
}

foreach ($array as $key) {
    echo "<li>".$key."</li>";
}
?>