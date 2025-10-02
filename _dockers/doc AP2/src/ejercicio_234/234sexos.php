<?php

$letras = [];
$arrayAsociativo = [
                    'M' => 0,
                    'F' => 0
                    ];

for ($i=0; $i < 99; $i++) { 
    if (rand(0,1) === 0) {
        $letras [$i] = "M";
    } else {
        $letras [$i] = "F";
    }
}

foreach ($letras as $key) {
    if ($key === "M") {
        $arrayAsociativo['M'] +=1;
    } else {
        $arrayAsociativo['F'] +=1;
    }
}

print_r($arrayAsociativo);
?>