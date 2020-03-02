<?php include('headeradmin.php');//llamo al header
 ?>
<body class="body">
<div class="bg-dark">
    <br/>
    <center><img src="../imagenes/bajatepelis.png" class="rounded img-fluid" width="200" alt="bajate pelis"></img></center>
    <br/>
    <center><h1 class="text-warning bg-dark">Añadir Usuario:</h1></center>
    <form class="form-inline my-2 my-lg-0 justify-content-center" action="alta_usuario.php" method="post">
      <fieldset class="text-warning">
      Usuario:<?php
                    if(isset ($_GET ["usuvacio"])){
                      echo "&nbsp;Titulo no puede estar vacio ";//comprobacion de usuario vacio
                    }
                    ?>
      <br/>
          <input name="usuario" class=" mr-sm-2 form-control" type="text">
          <br/><br/>
      Contraseña:<?php
      if(isset ($_GET ["contvacio"])){
        echo "&nbsp;Contraseña no puede estar vacio";//comprobacion contraseña vacio
      }
      ?>
      <br/>
          <input required name="contrasenya" class=" mr-sm-2 form-control" type="password">
          <br/><br/>
      Tipo:
                <br/> 
                    <select name="tipo">
                        <option value="administrador">administrador</option>
                        <option value="usuario" selected>usuario</option>
                    </select>
          <button class="btn btn-outline-danger btn-sm my-2 my-sm-0 justify-content-center" type="submit">&nbsp;&nbsp;Añadir&nbsp;&nbsp;</button>&nbsp;&nbsp;
        </form><br/><br/>
        <a class="text-warning" href="listado.php"><h5 class="sombra">-----volver a la zona privada-----</h5></a>
        <?php
      if(isset ($_GET ["error"])){
        echo "Error al añadir usuario";//comprobacion de insertacion de usuario error
      }
       if(isset ($_GET ["añadido"])){
        echo "Usuario añadido correctamente";//comprobacion de insertacion de usuario correcto
      }

      ?>

    </form>
    <br/><br/><br/><br/>
  </div>
</body>
</html>