<?php

include 'constantes.php';


function conectar()
{
  $conexion = new mysqli(SERVER, USER, PASSWORD, BD1);

  $conexion->set_charset("utf8");

  return $conexion;
}



function recogerUsuarios()
{
  session_start();

  $conexion2 = conectar();
  $conexion = conectar();

  $sql2 = "SELECT idUsuarioReceptor FROM Agradecimiento WHERE idUsuarioEmisor = '" . $_SESSION["idSesion"] . "'";

  $resultado2 = $conexion2->query($sql2);

  while ($fila2 = $resultado2->fetch_array()) {

    $sql = "SELECT NIA, nombre FROM Usuario WHERE NIA <> '" . $_SESSION["idSesion"] . "' OR NIA <> '" . $fila2["idUsuarioReceptor"] . "'";
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows == 1){
      $fila = $resultado->fetch_array();
      echo '<option value="' . $fila["NIA"] . '"' . '>' . $fila["nombre"] . '</option>';
    }

  }

  $conexion->close();
}

