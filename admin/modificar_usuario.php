<?php
include('headeradmin.php');//llamo al header zona admin
if(isset($_GET["id_usuario"])){
    $id_usuario = $_GET["id_usuario"];
      $sql = "select * from usuarios where id_usuario = $id_usuario";//consulta sql
      $result = $conn->query($sql);//resultado
      $row = $result->fetch_assoc();
      $usuario = $row["usuario"];
      $contrasenya = "";
    }else{
      $usuario = "";
      $contrasenya = "";
      $id_usuario = "";
    }
    
        
?>
<body class="body">
<div class="bg-dark">
    <br/>
    <center><img src="../imagenes/bajatepelis.png" class="rounded img-fluid" width="200" alt="bajate pelis"></img></center>
    <br/>
    <center><h1 class="text-warning bg-dark">Modificar Usuario:</h1></center>
    <form class="form-inline my-2 my-lg-0 justify-content-center" action="procesar_modificar_usuario.php" method="post">
      
      <fieldset class="text-warning">
        <input type="hidden" name="id_usuario" id="id_ususario" value="<?=$id_usuario?>"/>
      Usuario:
      <br/>
          <input required name="usuario" class=" mr-sm-2 form-control" value="<?=$usuario?>" type="text" placeholder="usuario">
          <br/><br/>
      Contraseña: (ponla sólo si quieres modificarla)
      <br/>
          <input name="contrasenya" class=" mr-sm-2 form-control" value="<?=$contrasenya?>" type="password" placeholder="Contraseña">
          <br/><br/>
          <button class="btn btn-outline-danger btn-sm my-2 my-sm-0 justify-content-center" type="submit">&nbsp;&nbsp;Modificar&nbsp;&nbsp;</button>&nbsp;&nbsp;
        </form><br/><br/>
        <a class="text-warning" href="listar_usuarios.php"><h5 class="sombra">-----volver al listado de usuarios-----</h5></a>
           <?php
            if(isset ($_GET ["error"])){
              echo "Error al modificar usuario";//dice si hay error
            }
             if(isset ($_GET ["modificado"])){
              echo "Usuario modificado correctamente";//digo que se ha añadido correctamente
            }

            ?>
    </form>
    <br/><br/><br/><br/>
  </div>
</body>
</html>