<?php
  require('conexion.php');
  $consulta = "SELECT * from computador";
  $resultado = mysqli_query($conexion,$consulta);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


 <div class="container-fluid ">
  <div class="row">
    <div class="col-5">
     
    </div>
    <div class="col-5">
    <form action="ingresar.php" method="POST">
<label class="car">caracteristica</label>
<br>
 <select name="caracteristica_enviado">
   <option>8 gb 512ssd i7</option>
   <option >10 gb 600ssd i5</option>
   <option >32 gb 5070ti i12</option>
   <option >4 gb 251ssd i3</option>
   <option >8 gb 661ssd i8</option>
   <option >12gb 969ssd i24</option>
 </select><br>
    <br>
<label>forma de adquisicion</label><br>
 <select name="forma_enviado" id=""><br>
   <option>comprado</option>
   <option>arrendado</option>
 </select><br>
<br>
<label >fecha</label><br>
<input type="date" name="fecha_recibida"><br>
<br>

<label>costos</label><br>
<span class="input-text">$<input type="number" name="costo_enviado"></span><br>

<br> 
<button type="submit">Guardar</button><br>
<form action="ingrepap.php">
</form>
</form>
    </div>
  </div>
 </div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
