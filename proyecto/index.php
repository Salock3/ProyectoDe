<?php
  require('conexion.php');
  ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> 
            <img src="LogoConcepcion.png" alt="" class="logo">
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Equipos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-6 d-none d-sm-block ">
                <img src="muni.jpg" alt="" class="imagen">
            </div>

            <div class="col-lg-6 col-sm-12 mt-4">
                
                <span>Ingrese su usuario</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <span>Ingrese su contraseña</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            <form action="ingrepap.php">
                <button type="button submit" class="btn btn-outline-primary">Iniciar Sesión</button>
                 </form>
                <br>
                
                <a href="">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
      </div>

      <footer>
        
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>