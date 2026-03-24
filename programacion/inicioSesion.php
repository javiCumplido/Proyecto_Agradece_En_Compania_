<?php

include "operacionesBD.php";

$usuario = $_POST["nombre"];
$contrasenia = $_POST["contrasenia"];

$conexion = conectar();

$sql = "SELECT nombre, contrasenia FROM Usuario WHERE nombre = '$usuario' AND contrasenia = '$contrasenia'";

$resultado = $conexion->query($sql);

if ($fila = $resultado->fetch_array()){
  header("Location: ../disenio/agradecimiento.php");
  exit();
} else header("Location: ../disenio/registrar.php");