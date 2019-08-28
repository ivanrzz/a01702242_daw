function validar(f) {
    if (f.elements["contra"].value == f.elements["contra1"].value) {
        alert("Coinciden las contrasenas");
    } else {
        alert("No coinciden la contrasena");
    }
}

let articulo1 = 0;
let articulo2 = 0;
let articulo3 = 0;
let articulo4 = 0;
let articulo5 = 0;
let total = 0;

function comprar() {

    var input1 = Number(document.getElementById("cantidad1").value);

    var input2 = Number(document.getElementById("cantidad2").value);

    var input3 = Number(document.getElementById("cantidad3").value);

    var input4 = Number(document.getElementById("cantidad3").value);

    var input5 = Number(document.getElementById("cantidad3").value);


    if (input1 >= 0) {
        articulo1 = articulo1 + input1;
        document.getElementById("coca").innerHTML = articulo1;

    } else {
        alert("Cantidad No Valida!");
    }
    if (input2 >= 0) {
        articulo2 = articulo2 + input2;
        document.getElementById("pepsi").innerHTML = articulo2;
    } else {
        alert("Cantidad No Valida!");

    }
    if (input3 >= 0) {
        articulo3 = articulo3 + input3;
        document.getElementById("snicker").innerHTML = articulo3;
    } else {
        alert("Cantidad No Valida!");

    }
    if (input4 >= 0) {
        articulo4 = articulo4 + input4;
        document.getElementById("squirt").innerHTML = articulo4;
    } else {
        alert("Cantidad No Valida!");

    }

    if (input5 >= 0) {
        articulo5 = articulo5 + input5;
        document.getElementById("zucaritas").innerHTML = articulo5;

    } else {
        alert("Cantidad No Valida!");
    }


    total = articulo1 * 10 + articulo2 * 20 + articulo3 * 30 + articulo4 * 40 + articulo5 * 50;
    document.getElementById("Total").innerHTML = total + " $";

};
