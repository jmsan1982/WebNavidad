<?php
include('../conexion.php');//llamo al archivo conexion bbdd
include('seguridad.php');//compruebo login
	$usuario = $_POST["usuario"];//variables
    $contrasenya = $_POST["contrasenya"];
    $id_usuario = $_POST["id_usuario"];
    
    
    if(empty($usuario)){
		header('Location: modificar_usuario.php?usuvacio=s');//compruebo si el usuario esta vacio si lo esta da un error
	}

	if(empty($contrasenya)){
			$sql = "update usuarios
				set usuario = '$usuario'
				where id_usuario = '$id_usuario'";//consulta sql	
	}else{
			$contrasenya = md5($contrasenya);
			$sql = "update usuarios
				set usuario = '$usuario', contrasenya = '$contrasenya'
				where id_usuario = '$id_usuario'";//consulta sql
	}		
	if ($conn->query($sql)) {
			header('Location: modificar_usuario.php?modificado=s');//redirijo a la pagina de modificar usuario correcto
	} else {
			header('Location: modificar_usuario.php?error=s');//redirijo a la pagina modificar usuario y da error
        
	}
		
	$conn->close();
		
	
		
?>
