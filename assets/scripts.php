<?php

    if (isset($_POST['action']) && $_POST['action'] === 'itemsMenu') {
    itemsMenu(00);
    }

function miFuncion(){
    echo "<h1>¡Función de PHP ejecutada!</h1>";
}

function itemsMenu($menu){
    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = " . $menu;
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $items[] = array(
                "icon" => $row["MNU_ICON"],
                "accion" => $row["MNU_ACCION"],
                "aplicacion" => $row["MNU_TITULO"],
                "subtitulo" => $row["MNU_SUBT"],
                "modulo" => $row["MNU_MODULO"],
                "codigo" => $row["MNU_CODIGO"]
            );
        }
        //$conn->close();
        return $items;
    } else {
        //$conn->close();
        return "No se encontraron resultados.";
    }
}

function buscarDatos($campos, $tabla, $cWhere = null, $group = null, $order = null, $print = false)
{
    $valores = implode(', ', array_map(fn ($campo) => trim($campo), explode(',', $campos)));
    $row = 0;
    global $conn;
    $sql = "SELECT $valores FROM alperp19.$tabla";
    if ($cWhere) {
        $sql = $sql . " WHERE " . $cWhere;
    }
    if ($group) {
        $sql = $sql . " GROUP BY " . $group;
    }
    if ($order) {
        $sql = $sql . " ORDER BY " . $order;
    }
    $resultado = mysqli_query($conn, $sql);
    $datos = array();
    if ($print === true) {
        echo $sql;
    } else {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $filaValores = array();
            $row++;
            foreach ($fila as $valor) {
                $filaValores[] = $valor;
            }
            echo implode(', ', $filaValores) . "<br>";
        }
    }
    mysqli_free_result($resultado);
    //mysqli_close($conn);
}


function llenarCombo($value, $show, $bd, $tabla, $cWhere = null, $group = null, $order = null, $print = false)
{
    global $conn;
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "SELECT " . $value . "," . $show . "
                FROM " . $bd . "." . $tabla;

    if ($cWhere) {
        $query = $query . " WHERE " . $cWhere;
    }
    if ($group) {
        $query = $query . " GROUP BY " . $group;
    }
    if ($order) {
        $query = $query . " ORDER BY " . $order;
    }

    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row["'" . $value . "'"] . '">' . $row["'" . $value . "'"] . '</option>';
    }
    if ($print === true) {
        echo $query;
    } else {
        echo $result;
    }
    mysqli_close($conn);
}
?>