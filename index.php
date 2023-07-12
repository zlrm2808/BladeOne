<?php
    require_once 'vendor/autoload.php';

    use eftec\bladeone\BladeOne;

    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';

    $blade = new BladeOne($views, $cache);

    $titulo = "Mierda";
    $contenido = "Contenido de la página";

    echo $blade->run("main", compact('titulo', 'contenido'));
?>