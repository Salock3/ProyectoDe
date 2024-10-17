<?php
    $conexion = mysqli_connect("localhost","root","","equipo");
    $rut_per = $_POST["rut_per_env"];
    $nom_per = $_POST["nombre_per_env"];
    $apl_per = $_POST["ape_per_env"];
    
    $consulta = "INSERT INTO trabajadores (rut, nombre, apellidoPat)
    VALUES ('$rut_per','$nom_per','$apl_per')";
    $resultado = mysqli_query($conexion,$consulta);
    header ('Location: ingrepap.php')
?>