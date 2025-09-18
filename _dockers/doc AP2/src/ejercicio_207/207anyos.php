<?php

$anyoActual = date("Y");
$edadActual = ;
$edadPasada = $edadActual -= 10;
$edadFutura = $edadActual += 10;
$sinEdad = 2025 - $edadActual;

echo "Tu edad fue $edadPasada <br><br>";
echo "Tu edad es $edadActual <br><br>";
echo "Tu edad sera $edadFutura <br><br>";

$edadHastaJuvilarte = ($sinEdad + 67) - $edadActual;

echo "Te faltan $edadHastaJuvilarte"

?>