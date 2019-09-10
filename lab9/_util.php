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
  ?>