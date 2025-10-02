<?php

$respuestas = ["Si", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro", "seguro", "yo diría que sí", "ni de coña"];

$pregunta = $_GET["pregunta"];

echo "La respuesta de ".$pregunta." es: ";

echo $respuestas[rand(0,count($respuestas))];

?>