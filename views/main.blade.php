<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{ $titulo }}</title>
    <?php
        date_default_timezone_set('America/Caracas');
        include_once "assets/cabecera.php";
    ?>
</head>
<body className='snippet-body'>
    @include('navbar')
    <script src="js/materialize.min.js"></script>
</body>
</html>