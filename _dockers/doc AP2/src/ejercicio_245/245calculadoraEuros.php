<?php

include ('245euros.php');

$euros = $_GET["primero"];
$cotizacion = $_GET["segundo"];

if ($euros != null ||$cotizacion != null) {
    echo euros2pesetas($euros, $cotizacion);
} else {
    echo euros2pesetas();
}




?>