<?php
include('headeradmin.php');
include('../conexion.php');//llamo al archivo conexion bbdd
$usuario="";//variables
$contrasenya="";
$tipo="";
				//paso las variables por post
	$usuario= $_POST ["usuario"];

	$contrasenya = $_POST ["contrasenya"];

	$tipo = $_POST ["tipo"];
	
		if($usuario==""){
		header('Location: añadir_usuarios.php?usuvacio=s');//compruebo si el usuario esta vacio si lo esta da un error
		}		
		elseif($contrasenya==""){
			header('Location: añadir_usuarios.php?contvacio=s');//compruebo si el password esta vacio si lo esta da un error
		
		}else{
		$contrasenya = md5($contrasenya);
		$sql = "insert into `usuarios` (id_usuario, usuario, contrasenya,tipo)
				values (null,'$usuario','$contrasenya','$tipo')";
				
		if ($conn->query($sql)) {
			
		    header('Location: añadir_usuarios.php?añadido=s');//redirijo al formulario y digo que se ha añadido bien
		            
				} else {
					header('Location: añadir_usuarios.php?error=s');//redirijo al formulario con error
        
			}
		}
		$conn->close();//cierro conexion
		

?>
