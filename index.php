<?php
echo "Estamos procesando sus datos<br><br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    if (empty($nombre) || empty($direccion) || empty($telefono)) {
        echo "Por favor, coloque todos los datos<br>";
    } else {
        echo "NOMBRE: ".$nombre."<br>";
        echo "DIRECCION: ".$direccion."<br>";
        echo "TELEFONO: ".$telefono."<br>";
    }
}
?>