<?php

include 'operacionesBD.php';

$NIA = $_POST["NIA"];
$nombre = $_POST["nombre"];
$constrasenia = $_POST["contrasenia"];
$jesuita = $_POST["jesuita"];
$nombreImagen = $jesuita . ".png";
$informacion = $_POST["informacion"];

$conexion = conectar();

$sql = "INSERT INTO Usuario (NIA, nombre, contrasenia, jesuita, rutaImagen, infromacion) VALUES ('$NIA','$nombre', '$constrasenia', '$jesuita', '$nombreImagen', '$informacion')";
$conexion->query($sql);
header("Location: ../disenio/index.php");
