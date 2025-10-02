<?php
$numPer = $_GET["numPersonas"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombres = $_POST["nombre"];
    $alturas = $_POST["altura"];
    $emails = $_POST["email"];

    for ($i = 0; $i < count($nombres); $i++) {
        echo "Persona " . ($i + 1) . "<br>";
        echo "Nombre: " . htmlspecialchars($nombres[$i]) . "<br>";
        echo "Altura: " . htmlspecialchars($alturas[$i]) . "<br>";
        echo "Email: " . htmlspecialchars($emails[$i]) . "<br><br>";
    }
} else {
    echo '<form action="" method="post">';
    for ($i = 0; $i < $numPer; $i++) {
        echo "<h3>Persona " . ($i + 1) . "</h3>";
        echo '<label>Nombre:</label>';
        echo '<input type="text" name="nombre[]"><br>';
        echo '<label>Altura:</label>';
        echo '<input type="text" name="altura[]"><br>';
        echo '<label>Email:</label>';
        echo '<input type="text" name="email[]"><br><br>';
    }
    echo '<input type="submit" value="Gestionar Personas">';
    echo '</form>';
}
?>
