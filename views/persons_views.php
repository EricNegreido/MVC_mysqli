<!DOCTYPE html>
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

  <?php 
  foreach ($matriz_persons as $row) {

    echo "<div>" . $row["nombre"] . "</div>";
  }
  ?>
</body>
</html>