<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $titulo }}</title>
    <?php
        date_default_timezone_set('America/Caracas');
        include_once "assets/cabecera.php";
        include_once "assets/conexion.php";
    ?>
</head>
<body className='snippet-body'>
    @include('navbar')


  <script type="text/javascript">
      let IDMENU = {{ $idmenu }} ;
  </script>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom/funciones.js"></script>
    <?php
    include_once "assets/cabecera.php";
    ?>
</head>
<body className='snippet-body'>
        <div id="app-container"></div>
        <div class="container-fluid px-0"> 
            @include('navbar')
        </div>
        </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap/bootstrap.js"></script>
<script src="js/custom/funciones.js"></script>
</html>