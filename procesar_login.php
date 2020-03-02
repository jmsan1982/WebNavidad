<?php  session_start();
include('conexion.php');

    $usuario = $_POST ["usuario"];
    $contrasenya = $_POST ["contrasenya"];

    $contrasenya = md5($contrasenya);
  

    $sql = "select * from usuarios where 
      usuario = '$usuario' and contrasenya ='$contrasenya'";

    $result = $conn->query($sql);
    $numero_filas = mysqli_num_rows($result);

    
    if($numero_filas){
        
    
     $_SESSION['autenticado'] = true;
     $row = $result->fetch_assoc();
     $_SESSION['usuario'] = $row['usuario'];
     $_SESSION['id_usuario'] = $row['id_usuario'];
     header('Location: admin/listado.php');

    }else{
     header('Location: login.php?error=s');
    }
?>