<?php

include 'operacionesBD.php';

session_start();

$idReceptor = $_POST["NIA"];
$mensaje = $_POST["mensaje"];

$conexion = conectar();

$sql = "INSERT INTO Agradecimiento (idUsuarioEmisor, idUsuarioReceptor, mensaje) VALUES (" . "'" . $_SESSION["idSesion"] . "', '" . $idReceptor . "', '" . $mensaje . "')";

$resultado = $conexion->query($sql);

if ($resultado) {
  header("Location: ../disenio/ver_agradecimientos.php");
} else {
  if ($conexion->errno == 1062) echo "Has duplicado";
  else "Error: " . $conexion->error;
}
