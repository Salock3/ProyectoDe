<?php
    $conexion = mysqli_connect("localhost","root","","equipo");
    $caracteristica =  $_POST["caracteristica_enviado"];
    $fecha = $_POST["fecha_recibida"];
    $costo = $_POST["costo_enviado"];
    $forma = $_POST["forma_enviado"];

    $consulta = "INSERT INTO computador (caracteristica, fecha, costo, Forma_Adquisicion)
    VALUES ('$caracteristica','$fecha','$costo','$forma')";
    $resultado = mysqli_query($conexion,$consulta);
    header('Location: ingrepap.php')
?>