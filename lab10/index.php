<?php 
 
  #libreria con las funciones promedio() y tabla()
  require_once("util.php");
  
  #El header de la pagina
  include_once("partials/_header.html");
  
  include_once("partials/_funciones.html");
  
  #Calcular el promedio y generar la tabla
  $numeros = array($_POST["funcion1"], $_POST["funcion2"], $_POST["funcion3"], $_POST["funcion4"], $_POST["funcion5"]);
  $promedio = promedio($numeros);
  $tabla = tabla();
  include_once("partials/_resultados.html");

  #preguntas y pie de pagina
  include_once("partials/_preguntas.html");
  include_once("partials/_footer.html");

?>
