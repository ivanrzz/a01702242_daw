function hideText() {
    document.getElementById("ph").style.visibility = "hidden";
}

function setFont() {
    document.getElementById("by").style.fontStyle = "oblique";
}
let alerta = 0;

function alertFont() {
    if (alerta == 0) {
        alert("Recuerda que si das click el boton desaparecera ");
    }
    alerta++;


}

function info() {

    setTimeout(function () {
        alert("El método setTimeout () llama a una función o evalúa una expresión después de un número especificado de milisegundos.");
    }, 2000);
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
