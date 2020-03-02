<!DOCTYPE html>
<html>
  <head>
  	 <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
    <title>Login - Bajatepelis</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
<body class="body bg-light">
	<div class="bg-light">
		<br/>
		<center><img src="imagenes/bajatepelis.png" class="rounded img-fluid" width="400" alt="bajate pelis"></img></center>
		<br/>
		<center><h1 class="text-danger bg-light">Acceder:</h1></center>
		<form class="form-inline my-2 my-lg-0 justify-content-center" action="procesar_login.php" method="post">
			<fieldset class="text-danger">
			Usuario:
			<br/>
		      <input name="usuario" class=" mr-sm-2 form-control" type="text" placeholder="Usuario">
		      <br/><br/>
		    Contraseña:
		    <br/>
		      <input name="contrasenya" class=" mr-sm-2 form-control" placeholder="Contraseña" type="password">
		      <br/><br/>
		      <button class="btn btn-outline-primary btn-sm my-2 my-sm-0 justify-content-center" type="submit">&nbsp;&nbsp;Entrar&nbsp;&nbsp;</button>&nbsp;&nbsp;
		    </form><br/><br/>
		    <a class="text-warning" href="index.php"><h5 class="sombra">-----volver al inicio-----</h5></a>
			<?php
			if(isset ($_GET ["error"])){
				echo "el login o el password son incorrectos";
			}	

			?>
			</fieldset>
		</form>
		<br/><br/><br/><br/>
	</div>
</body>
</html>
