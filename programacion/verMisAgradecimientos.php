<?php

  include 'operacionesBD.php';

  session_start();
  $conexion = conectar();
  $sql = "SELECT idAgradecimiento, idUsuarioEmisor FROM Agradecimiento WHERE idUsuarioReceptor ='" . $_SESSION["idSesion"] . "'";
  $resultado1 = $conexion->query($sql);
  while ($fila1 = $resultado1->fetch_array()){
    $agradecimiento = $fila1["idAgradecimiento"];
    $sql = "SELECT nombreJesuita, informacionJesuita, web FROM Usuario WHERE NIA = '" . $fila1["idUsuarioEmisor"] . "'";
    $fila2 = $conexion->query($sql)->fetch_array();
    echo '<section>' . "<h3>" .$fila2["nombreJesuita"] . "</h3>" . "<p>" . $fila2["informacionJesuita"] . "</p>" . '<a href="' . '../disenio/miAgradecimiento.php?id=' . $agradecimiento .  '">IR</a>' . "</section>";
  }