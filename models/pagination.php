<?php
  require_once("conexion.php");
    $db = new Connect();
    $limit = 3;
    $pagina = isset($_GET["pag"]) ? $_GET["pag"] : 1; 
    $start = ($pagina-1) * $limit;
    $sql_total = ("SELECT * FROM datos_usuarios"); // $registro tendra un array de objetosaa
    $resultado = mysqli_query($db->connection() ,$sql_total);
    $num_filas = mysqli_num_rows($resultado);

    $total_paginas = ceil($num_filas/$limit);
 ?>