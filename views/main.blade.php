<!DOCTYPE html>
<html lang="es">
<head>
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
</body>
</html>