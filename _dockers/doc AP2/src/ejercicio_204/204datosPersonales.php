<?php
$nombre = "Alejandro";
$apellido = "Machí";
$email = "ejemplo@ies.com";
$anno = 2005;
$telefono = 666777888;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nombre:</td>
            <td><?= $nombre; ?></td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td><?= $apellido; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?= $email; ?></td>
        </tr>
        <tr>
            <td>Año de nacimiento:</td>
            <td><?= $anno; ?></td>
        </tr>
        <tr>
            <td>Teléfono:</td>
            <td><?= $telefono; ?></td>
        </tr>
    </table>
</body>
</html>