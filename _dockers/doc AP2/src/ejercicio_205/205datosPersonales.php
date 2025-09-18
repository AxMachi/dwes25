<?php

$nombre = $_GET["Nombre"];
$apellido = $_GET["Apellidos"];
$email = $_GET["email"];
$anno = $_GET["anno"];
$telefono = $_GET["telefono"];

echo "<table>
        <tr>
            <td>Nombre:</td>
            <td>$nombre</td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td>$apellido</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>$email</td>
        </tr>
        <tr>
            <td>Año de nacimiento:</td>
            <td>$anno</td>
        </tr>
        <tr>
            <td>Teléfono:</td>
            <td>$telefono</td>
        </tr>
    </table>"
?>