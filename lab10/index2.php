<?php 
 
  #libreria con las funciones promedio() y tabla()
  require_once("util.php");
  
  $content = tabla();
  $numeros = array($_POST["funcion1"], $_POST["funcion2"], $_POST["funcion3"], $_POST["funcion4"], $_POST["funcion5"]);
  $promedio = promedio($numeros);
  $content .= "El promedio es $promedio";

  include_once("template.html");

?>
