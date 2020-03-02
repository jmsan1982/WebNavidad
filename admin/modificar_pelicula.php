<?php include('headeradmin.php');//traigo el header de admin
?>
<body class="bg-dark">
	<?php
	$id = $_GET["id"];
	$sql = "select * from peliculas p where p.id = '$id'";//consulta a la bbdd
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$titulo = $row["titulo"];
	$titulo_original = $row["titulo_original"];
	$produccion = $row["produccion"];
	$duracion = $row["duracion"];
	$calificacion = $row["calificacion"];
	?>

	<div class="bg-dark">
		<br/>
		<center><img src="../imagenes/bajatepelis.png" class="rounded img-fluid" width="200" alt="bajate pelis"></img></center>
		<br/>
		<center><h1 class="text-warning bg-dark">Modificar pelicula:</h1></center>
		<form class="form-inline my-2 my-lg-0 justify-content-center" action="procesar_modificar_pelicula.php" method="post">
			<input type="hidden" name="id" id="id" value="<?=$id?>"/>
			<fieldset class="text-warning">
				Titulo:
				<br/>
				<input required name="titulo" class=" mr-sm-2 form-control" value="<?=$titulo?>" type="text" placeholder="Titulo">
				<br/><br/>
				Titulo Original:
				<br/>
				<input name="titulo_original" class=" mr-sm-2 form-control" type="text" value="<?=$titulo_original?>" placeholder="Titulo Original">
				<br/><br/>
				Produccion:
				<br/>
				<input name="produccion" class=" mr-sm-2 form-control" type="text" value="<?=$produccion?>" placeholder="Produccion">
				<br/><br/>
				Duracion:
				<br/>
				<input name="duracion" class=" mr-sm-2 form-control" type="text" value="<?=$duracion?>" placeholder="duracion">
				<br/><br/>
				Calificacion:
				<br/>
				<input name="calificacion" class=" mr-sm-2 form-control" type="text" value="<?=$calificacion?>" placeholder="calificacion">
				<br/><br/>
				<button class="btn btn-outline-danger btn-sm my-2 my-sm-0 justify-content-center" type="submit">&nbsp;&nbsp;Modificar&nbsp;&nbsp;</button>&nbsp;&nbsp;
			</form><br/><br/>
			<a class="text-warning" href="listado.php"><h5 class="sombra">-----volver a la zona privada-----</h5></a>
		</fieldset>
	</form>
	<br/><br/><br/><br/>
</div>
</body>
</html>

