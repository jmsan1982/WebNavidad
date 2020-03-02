<?php
include('conexion.php');

$usuario = $_POST ["usuario"];
$contrasenya = $_POST ["contrasenya"];

$sql = "select * from usuarios where 
usuario = '$usuario' and contrasenya ='$contrasenya'";

$result = $conn->query($sql);

if($row = $result->fetch_assoc()){
     session_start();
     $_SESSION['autenticado'] = true;
     $_SESSION['usuario'] = $usuario;
     header('Location: admin/listado.php');
    }else{
     header('Location: login.php?error=s');
    }

?>