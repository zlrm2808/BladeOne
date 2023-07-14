<?php
    require_once 'vendor/autoload.php';
    include_once "assets/conexion.php";

    global $conn;

    if ($conn->connect_error) {
        die("Error al conectar a la base de datos: " . $conn->connect_error);
    }

    use eftec\bladeone\BladeOne;

    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';

    $blade = new BladeOne($views, $cache);

    $titulo = "Avicola la Providencia";
    $items = "Aplicacion1";
    echo $blade->run("main", compact('titulo', 'items'));

if ($result->num_rows > 0) {
    // Mostrar los resultados en elementos li
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["MNU_TITULO"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron resultados.";
}


?>

