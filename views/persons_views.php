<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    div{
      border:1px solid green;
    }
  </style>
</head>
<body>

  ?php 
  foreach ($matriz_persons as $row) {

    echo "<div>" . $row["nombre"] . "</div>";
  }
  ?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      width: 80%;
      margin: 0 auto;
    }
    .etiqueta{
      display:flex;
      flex-direction:row;

    }
    label{
      display: block;
      width: 120px;
    }
    .registro, .items{
      display:flex;
      flex-direction:row;
    }
    input{
      border:none;
      background: #eee;
      box-shadow: #222 0px 1px 3px;
      width: 120px;
      margin: 2px
    }
    div{
      border:none;
      background: #eee;
      box-shadow: #222 0px 1px 3px;
      width: 125px;
      margin: 2px
    }
    .btn{
      background: #33f;
      box-shadow: none;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      height:20px;
      width:100px;
    }
  </style>
</head>
<body>
  <form action="insertar.php" method="POST">
    <section class="etiqueta">
      <label for="nombre"> Nombre </label>
      <label for="apellido"> Apellido </label>
      <label for="direccion"> Direccion </label>
    </section>
    <section class="items">
      <input type="text" name="nombre" value="nombre">
      <input type="text" name="apellido" value="apellido">
      <input type="text" name="direccion" value="direccion">
      <section class="buttons">
        <input class="btn" type="submit" value="Crear">
      </section>  
    </section>
    
  </form>
 <?php foreach ($matriz_persons as $registros):?>
  <section class="registro">
    <div><?php echo $registros["nombre"]?></div>
    <div><?php echo $registros["apellido"]?></div>
    <div><?php echo $registros["direccion"]?></div>
    <a href="borrar.php?id=<?php echo $registros["id"]?>"><input class="btn" type="button" value="Borrar"></a>
    <a href="editar.php?id=<?php echo $registros["id"]?>&nom=<?php echo $registros["nombre"]?>&ape=<?php echo $registros["apellido"]?> & dir='<?php echo $registros["direccion"]?>'"> <input class="btn" type="button" value="Actualizar"></a>
  </section>
<?php endforeach;
  for($i=1; $i<=$total_paginas; $i++){
    echo "<a href='index.php?pag=$i'>" . $i . "</a>  ";
  }
?>



</body>
</html>