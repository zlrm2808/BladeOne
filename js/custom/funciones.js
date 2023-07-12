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

function insertarTitulo() {
    let titulo = '<h1>Aplicaciones</h1>';
    return document.getElementById('titulo-container').innerHTML = titulo;
}

function crearItemMenu(id,item,eID){
    let listItem = 
        '<li class="nav-item">' +
            '<a class="nav-link" href="#" id="navbarDropdown"'+id+' role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+item+'<span class="fa fa-angle-down"></span></a>' +
        '</li>';
    return document.getElementById(eID).innerHTML = listItem;
}

function saluda(){
    return alert('Hola Mundo');
}