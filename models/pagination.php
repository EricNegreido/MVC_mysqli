<?php
  require_once("conexion.php");
    $db = new Connect();
    $tamaño_paginas = 3;
    $pagina = isset($_GET["pag"]) ? $_GET["pag"] : 1; 
    $empezar = ($pagina-1) * $tamaño_paginas;
    $sql_total = ("SELECT * FROM datos_usuarios"); // $registro tendra un array de objetosaa
    $resultado = mysqli_query($db->connection() ,$sql_total);
    $num_filas = mysqli_num_rows($resultado);

    $total_paginas = ceil($num_filas/$tamaño_paginas);

    $sql_limite= ("SELECT * FROM datos_usuarios LIMIT $empezar, $tamaño_paginas"); // $registro tendra un array de objetosaa

    $resultado = mysqli_query($db->connection(), $sql_limite);

 ?>