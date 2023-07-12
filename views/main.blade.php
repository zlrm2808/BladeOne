<!DOCTYPE html>
<html>
<head>
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/custom/styles.css">
    
</head>
<body>
    @include('navbar')

    <div>
        <h1>{{ $contenido }}</h1>
    </div>

    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/custom/funciones.js"></script>
</body>
</html>