
<?php 

    $IDMENU = $_POST["IDMENU"];
 ?>

<div class="navbar-fixed custom-fixed">
    <nav class="blue darken-3 custom-navbar">
        <div class="row nav-wrapper">
            <div class="col s2">
                <div class="container">
                    <img src="img/Logo_menu.png" alt="" >
                </div>
            </div>
            <div class="col s8">
                <ul class="Left">

<?php 


include "conexion.php";


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = '00'";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];
            $MNU_ACCION=$row["MNU_ACCION"];

            echo "
                    <li><a class='modal-trigger' href='#$MNU_ACCION'><i class='material-icons left i-menu'>$MNU_ICON</i>$MNU_TITULO</a></li>
                  ";
        }

    }

?>


                </ul>
            </div>
        </div>
        <div class="nav-content">
            <span class="nav-title">Title</span>
            <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal">
                <i class="material-icons">add</i>
            </a>
        </div>
    </nav>
</div>






        <div id="menu-apps" class="modal z-depth-0 grey lighten-4">
            <div class="modal-content">
                <div class="row">
                    <div class="col s12 center">
                        <h5>Aplicaciones</h5>
                    </div>
                    <div class="col s6">
                        <div class="collection">

<?php 



 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 01";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];
            $MNU_ACCION=$row["MNU_ACCION"];

            if ($arow % 2 != 0 || $arow == 0) {
                echo "
                        <a href='$MNU_ACCION' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="collection">
<?php 


 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 01";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];

            if ($arow % 2 != 1 || $arow == 0) {
                echo "
                        <a href='#!'' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>





        <div id="menu-fiche" class="modal z-depth-0 grey lighten-4">
            <div class="modal-content">
                <div class="col s12 center">
                    <h5>Ficheros</h5>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="collection">
                            <?php 



 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 02 AND MNU_MODULO = $IDMENU";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];
            $MNU_ACCION=$row["MNU_ACCION"];

            if ($arow % 2 != 0 || $arow == 0) {
                echo "
                        <a href='$MNU_ACCION' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="collection">
<?php 


 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 02 AND MNU_MODULO = $IDMENU";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];

            if ($arow % 2 != 1 || $arow == 0) {
                echo "
                        <a href='#!'' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>


        <div id="menu-trans" class="modal z-depth-0 grey lighten-4">
            <div class="modal-content">
                <div class="col s12 center">
                    <h5>Transacciones</h5>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="collection">
                            <?php 



 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 03 AND MNU_MODULO = $IDMENU";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];
            $MNU_ACCION=$row["MNU_ACCION"];

            if ($arow % 2 != 0 || $arow == 0) {
                echo "
                        <a href='$MNU_ACCION' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="collection">
<?php 


 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 03 AND MNU_MODULO = $IDMENU";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];

            if ($arow % 2 != 1 || $arow == 0) {
                echo "
                        <a href='#!'' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>


        <div id="menu-infor" class="modal z-depth-0 grey lighten-4">
            <div class="modal-content">
                <div class="col s12 center">
                    <h5>Informes</h5>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="collection">
                            <?php 



 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 04 AND MNU_MODULO = $IDMENU";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];
            $MNU_ACCION=$row["MNU_ACCION"];

            if ($arow % 2 != 0 || $arow == 0) {
                echo "
                        <a href='$MNU_ACCION' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="collection">
<?php 


 $arow = 0;


    $sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = 04 AND MNU_MODULO = $IDMENU";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $arow++;

            $MNU_TITULO=$row["MNU_TITULO"];
            $MNU_ICON=$row["MNU_ICON"];

            if ($arow % 2 != 1 || $arow == 0) {
                echo "
                        <a href='#!'' class='collection-item'><i class='material-icons left'>$MNU_ICON</i>$MNU_TITULO</a>
                    ";
            }
        }

    }

?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>