<?php

  include "operacionesBD.php";

  session_start();

  $usuario = $_POST["nombre"];
  $password = $_POST["password"];

  $conexion = conectar();

  $sql = "SELECT NIA FROM Usuario WHERE nombre ='" . $usuario . "' AND password = '" . $password . "'";

  $resultado = $conexion->query($sql);

  if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array();
    $_SESSION["idSesion"] = $fila["NIA"];
    header("Location: ../disenio/agradecimiento.php");
  } else {
    header("Location: ../disenio/registrar.php");
  }
