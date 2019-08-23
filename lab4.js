/* Genera una tabla de multiplicar, por defecto del 1 al 10 */
function tabla_multiplicar(limite = 10) {
    let resultado = "<table><tbody>";
    for (let i = 1; i <= limite; i++) {
        resultado += "<tr>";
        for (let j = 1; j <= limite; j++) {
            resultado += "<td>";
            resultado += i * j;
            resultado += "</td>";
        }
        resultado += "</tr>";
    }
    resultado += "</tbody></table>";​
    return resultado;
}​
//Imprimir tabla del 1 al 10
let tabla = tabla_multiplicar();
document.write(tabla);​
//Imprimir tabla con la longitud que el usuario desee
let limite_usuario = prompt("Ingresa un numero: ");
let tabla_personalizada = tabla_multiplicar(limite_usuario);
document.write(tabla_personalizada);
