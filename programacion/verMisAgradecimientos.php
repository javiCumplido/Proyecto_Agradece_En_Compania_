<?php

  include 'operacionesBD.php';

  session_start();
  $conexion = conectar();
  $sql1 = "SELECT idUsuarioEmisor, idAgradecimiento FROM Agradecimiento WHERE idUsuarioReceptor ='" . $_SESSION["idSesion"] . "'";
  $resultado = $conexion->query($sql1);
  while ($fila = $resultado->fetch_array()){
    $agradecimiento = $fila["idAgradecimiento"];
    $sql2 = "SELECT nombreJesuita, informacionJesuita, web FROM Usuario WHERE NIA = '" . $fila["idUsuarioEmisor"] . "'";
    $fila = $conexion->query($sql2)->fetch_array();
    echo '<section>' . "<h3>" .$fila["nombreJesuita"] . "</h3>" . "<p>" . $fila["informacionJesuita"] . "</p>" . '<a href="' . '../disenio/miAgradecimiento.php?id=' . $agradecimiento .  '">IR</a>' . "</section>";
  }