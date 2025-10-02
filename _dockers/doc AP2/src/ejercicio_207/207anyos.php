<?php

$anyoActual = date("Y");
$edadActual = $_GET["edad"];
$edadPasada = $edadActual -= 10;
$edadFutura = $edadActual += 10;

echo "Tu edad fue $edadPasada <br><br>";
echo "Tu edad es $edadActual <br><br>";
echo "Tu edad sera $edadFutura <br><br>";

$edadHastaJuvilarte = (67 - $edadActual);

echo "Te faltan $edadHastaJuvilarte años hasta juvilarse <br><br>";

echo "En este año te juvilaras".($edadHastaJuvilarte + $anyoActual);

?>