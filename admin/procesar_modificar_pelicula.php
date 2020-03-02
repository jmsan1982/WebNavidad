<?php
include('../conexion.php');//llamo al archivo conexion bbdd

$titulo = $_POST["titulo"];
$titulo_original = $_POST["titulo_original"];
$produccion = $_POST["produccion"];
$duracion = $_POST["duracion"];
$calificacion = $_POST["calificacion"];
$id = $_POST["id"];




$sql = "update peliculas set titulo ='$titulo', titulo_original = '$titulo_original', produccion = '$produccion', duracion = '$duracion', calificacion = '$calificacion', genero ='$genero' where id = $id";//consulta sql
				
		if ($conn->query($sql)) {
			header('Location: listado.php?modificado=s');//redirijo a la pagina de modificar cliente correcto
		} else {
			header('Location: listado.php?id='.$id.'&error='.$error);//redirijo a la pagina modificar cliente y da error

		}
		
		$conn->close();		
		?>