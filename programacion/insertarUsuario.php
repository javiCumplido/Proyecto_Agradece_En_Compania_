<?php

include 'operacionesBD.php';

$NIA = $_POST["NIA"];
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$jesuita = $_POST["jesuita"];
$informacion = $_POST["informacion"];
$web = str_replace(" ", "", $jesuita);

$conexion = conectar();

$sql = "INSERT INTO Usuario (NIA, nombre, password, nombreJesuita, informacionJesuita, web) VALUES ('$NIA','$nombre', '$password', '$jesuita', '$informacion', '$web')";
$conexion->query($sql);

if ($conexion->errno == 0) header("Location: ../disenio/index.php"); // codigo de error de consulta 0 es que la consulta es successfull
else echo "Ha ocurrido un error fatal : " . $conexion->error;

