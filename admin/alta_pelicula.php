<?php
include('../conexion.php');//traigo la conexion
include('seguridad.php');//verifico que este logueado
$titulo="";//añado las variables
$tituloriginal="";
$produccion="";
$calificacion="";
$duracion="";
$genero="";
$error="";
			//paso las variables por get
	$titulo= $_GET ["titulo"];
	$duracion = $_GET ["duracion"];
	$genero = $_GET ["genero"];
	$tituloriginal= $_GET ["tituloriginal"];
	$produccion= $_GET ["produccion"];
	$calificacion= $_GET ["calificacion"];
	

		if(empty($titulo)){
		header('Location: insertar_pelicula.php?tituvacio=s'); //compruebo que titulo no este vacio
		}else{
    
		    $sql = "insert into peliculas (titulo,titulo_original,produccion, duracion, calificacion)
		            values ('$titulo','$tituloriginal','$produccion', '$duracion','$calificacion');";//select

			if ($resultado = $conn->query($sql)) {
					
		            $sql = "select id from peliculas where titulo = '$titulo'" ;//inserto los datos en la tabla peliculas
		            //ejecuto la consulta
		            $result = $conn->query($sql);                       
		            //guardo el resultado 
		            $row = $result->fetch_assoc();                       
		            //obtengo el dato que necesito
		            $id_pelicula = (int)$row["id"];   	
		            
		            $sql = "insert into peliculas_generos values ($id_pelicula , $genero) ;";//inserto el id de la pelicula con el id de genero
		           
		            if($resultado = $conn->query($sql)){//redirijo al formulario digo si se ha añadido correctamente
		            	header('Location: insertar_pelicula.php?añadida=s');
		            }
		            
				} else {
					header('Location: insertar_pelicula.php?error=s');//si hay error redirijo al formulario y da error
		        
				}
		}
			

				$conn->close();//cierro sesion
		
?>