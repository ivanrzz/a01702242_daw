<?php
function saludar() {
    echo '<p>Hello World</p>'; 
    $nombre = "Lalo"; 
    echo "Y hola $nombre<br>";
  }

  function lista() {
    echo "<ul>";
    for($i=1; $i<=10; $i++) {
      echo "<li>$i</li>";
    }
    echo "</ul>";
  }

  function lista_string() {
    $lista = "<ul>";
    for($i=1; $i<=10; $i++) {
      $lista .= "<li>$i</li>";
    }
    $lista .= "</ul>";

    return $lista;
  }
function promedio(){
          $numeros = array($_POST["funcion1"], $_POST["funcion2"], $_POST["funcion3"], $_POST["funcion4"], $_POST["funcion5"]);
          $promedio = 0;
          sort($numeros);
          for ($i=0; $i <count($numeros) ; $i++) {
            $promedio += $numeros[$i];
          }
          $promedio = $promedio/5;
          echo "<br><br><div class ='p-3 mb-2 bg-secondary text-white'><h5>El promedio es: " . $promedio . "</h5><br>";
          echo "<h5>La mediana es: " . $numeros[2] . "</h5><br>";
          echo "<h5>Los numeros en orden ascendente son: ";
          for ($i=0; $i <count($numeros) ; $i++) {
            echo $numeros[$i] . " ";
          }
          echo "<br>" . "<br><h5>Los numeros en orden descendente son: ";
          for ($i=count($numeros) - 1; $i >= 0 ; $i--) {
            echo $numeros[$i] . " ";
          }
          echo "</h5><br> </div>";
        }
  function tabla(){
        $n6 = $_POST["funcion6"];
        echo "<table class='table table-striped table-dark' border='3' >
          <tr><th>Numero</th><th>Cuadrado</th><th>Cubo</th></tr>";
        for ($i=0; $i <= $n6; $i++) {
          $cubo = $i*$i*$i;
          $cuadrado = $i*$i;
          echo"<tr ><td>$i</td><td>$cuadrado</td><td>$cubo</td><tr>";
        }
        echo "</table> <br> ";
  }
   		promedio();
        tabla();
     ?>
