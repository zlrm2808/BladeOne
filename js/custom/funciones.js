function cerrarVentana(){
    window.location.href = "index.php";
}

function enterFullscreen() {
    var appContainer = document.documentElement;
    if (appContainer.requestFullscreen) {
        appContainer.requestFullscreen();
    } else if (appContainer.mozRequestFullScreen) {
        appContainer.mozRequestFullScreen();
    } else if (appContainer.webkitRequestFullscreen) {
        appContainer.webkitRequestFullscreen();
    } else if (appContainer.msRequestFullscreen) {
        appContainer.msRequestFullscreen();
    }
}

function clientesSelect(){
    document.getElementById("clientSelect").addEventListener("change", function() {
    var selectedRif = this.value;
    document.getElementById("selectedRif").innerHTML = "CLI_RIF: " + selectedRif;
});
}

function crearItemMenu(id,item,eID){
    let listItem = 
        `<a class="nav-link" href="#" id="navbarDropdown${id}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="${item}">${item}<span class="fa fa-angle-down"></span></a>
        <div class="dropdown-menu" id="dropdown-menu${id}">
            <div class="container" id="container-${eID}">
            </div>
        </div>`; 
    document.getElementById(eID).innerHTML = listItem;
    return saluda();
}

function insertIcons(id){
    let iconos ='<h1> ICONOS </h1>';
    return document.getElementById(`container-item1`).innerHTML = iconos;
}

function saluda(){
let saluda = '<h1>Hola</h1>';
    return document.getElementById(`dropdown-menu1`).innerHTML = saluda;   
}

function itemsMenu(menu) {
    const mysql = require('mysql');
    const conn = mysql.createConnection({
        host: '192.168.1.16',
        user: 'cliente',
        password: '*/*J403101531*/*',
        database: 'admconfig60'
    });
    conn.connect((err) => {
        if (err) {
            console.error('Error connecting to MySQL:', err);
            return;
        }
    });
    let sql = "SELECT MNU_ICON,MNU_ACCION,MNU_TITULO,MNU_SUBT,MNU_MODULO,MNU_CODIGO FROM admconfig60.dpmenu_aviprosis WHERE MNU_HORIZO = " + menu;
    let items = [];
    let result = conn.query(sql);
    if (result.num_rows > 0) {
        while (row = result.fetch_assoc()) {
            items.push({
                "icon": row["MNU_ICON"],
                "accion": row["MNU_ACCION"],
                "aplicacion": row["MNU_TITULO"],
                "subtitulo": row["MNU_SUBT"],
                "modulo": row["MNU_MODULO"],
                "codigo": row["MNU_CODIGO"]
            });
        }
        conn.end();
        return document.getElementById(`container-item1`).innerHTML =items;
    } else {
        conn.end();
        return "No se encontraron resultados.";
    }

}