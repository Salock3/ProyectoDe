<?php
  require('conexion.php');
  $consulta = "SELECT * from computador";
  $resultado = mysqli_query($conexion,$consulta);
?>
 <!doctype html>  
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img class="logo" src="LogoConcepcion.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ingresar_datos_per.php">Ingresar Personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">
  <div class="row">
    <div class="col-lg-10">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-2">
    <form action="ingresar_papus.php">
      <button>ingresar</button>
    </form>
    <form action="grafico.html">
    <button>grafico</button>
   </form>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
      <table class="table">
      <thead>
          <tr>
            <th scope="col-2">id</th>
            <th scope="col-2">caracteristica</th>
            <th scope="col-2">forma de adquisicion</th>
            <th scope="col-2">fecha </th>
            <th scope="col-2">costo</th>
          </tr>
      </thead>
      <tbody>
      <?php
        while($row=mysqli_fetch_assoc($resultado)){
         $id = $row["id"];
         $cara = $row["caracteristica"];
         $forma = $row["Forma_Adquisicion"];
         $fechaa =  $row["fecha"];  
         $costo = $row["costo"];
         echo "<tr>";
         echo "<td>".$id."</td>";
         echo "<td>".$cara."</td>";
         echo "<td>".$forma."</td>";
         echo "<td>".$fechaa."</td>";
         echo "<td>".$costo."</td>";
         echo "</tr>";     
        }
     ?>
      </tbody>
    </table>
   
      </div>
  </div>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>