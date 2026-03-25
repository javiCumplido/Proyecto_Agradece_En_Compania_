i<?php

  include "operacionesBD.php";

  session_start();

  $usuario = $_POST["nombre"];
  $contrasenia = $_POST["contrasenia"];

  $conexion = conectar();

  $sql = 'SELECT idAlumno FROM Usuario WHERE nombre =\'' . $usuario . '\' AND contrasenia = \'' . $contrasenia . '\'';

  $resultado = $conexion->query($sql);

  if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array();
    $_SSESION["idAlumno"] = $fila["idALumno"];
    header("Location: ../disenio/agradecimiento.php");
    exit();
  } else header("Location: ../disenio/registrar.php");
