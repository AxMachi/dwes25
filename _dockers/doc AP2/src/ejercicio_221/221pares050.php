<?php

// $losPares = [];

echo "<ul>";

for ($i=0; $i < 50; $i++) { 
    if ($i % 2 == 0) {
        echo "<li>$i</li>";
    }
}

echo "</ul>";

// for ($i=0; $i < 50; $i++) { 
//     if ($i % 2 == 0) {
//         for ($x=0; $i == 50; $x++) { 
//             $losPares [$x] = $i;
//         }
//     }
// }

// for ($i=0; $i < count($losPares); $i++) {
//     echo $losPares [random_int(0,count($losPares))];
// }

?>