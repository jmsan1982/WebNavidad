<?php
include('headeradmin.php');//llamo al header zona admin


$id_usuario = $_GET["id_usuario"];
$sql = "delete from usuarios where id_usuario = $id_usuario";//consulta sql
$result = $conn->query($sql);//resultado


if ($conn->query($sql)) {
      header('Location: listar_usuarios.php');
  } else {
      header('Location: listar_usuarios.php');
    }
        
?>