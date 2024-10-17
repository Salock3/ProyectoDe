<?php
  require('conexion.php');
  $consulta = "SELECT * from trabajadores";
  $resultado = mysqli_query($conexion,$consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="container-fluid ">
  <div class="row">
    <div class="col-5">
     
    </div>
    <div class="col-5">
        <form action="ingresar_per.php" method="POST">
        <label>rut</label><br>
        <input type="number"minlength="8" maxlength="8" name="rut_per_env"><br>

        <label>Nombre</label><br>
        <input type="text" name="nombre_per_env"><br>
         
        <label>Apellido Paterno</label><br>
        <input type="text" name="ape_per_env"><br>

        <button type="submit">Guardar</button><br>
        <form action="ingrepap.php">
        </form>
        </form>
    </div>
  </div>
 </div>
</body>
</html>