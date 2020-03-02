<?php
include('../conexion.php');//llamo al header zona admin
include('seguridad.php');

$id = $_GET["id"];
$sql = "update peliculas set estado = 1
				where id = '$id';";//consulta sql
$result = $conn->query($sql);//resultado


if ($conn->query($sql)) {
      header('Location: listado.php');
  } else {
      header('Location: listado.php');
    }
        
?>