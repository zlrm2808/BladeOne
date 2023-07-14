<?php
    $servername = "192.168.1.16";
    $username = "cliente";
    $password = "*/*J403101531*/*";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password);
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
?>