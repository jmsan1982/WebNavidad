<?php include('headeradmin.php');//traigo el header
?>
<body>
<div class="bg-dark">
    <br/>
    <center><img src="../imagenes/bajatepelis.png" class="rounded img-fluid" width="200" alt="bajate pelis"></img></center>
    <br/>
    <center><h1 class="text-warning bg-dark">Añadir pelicula:</h1></center>
    <form class="form-inline my-2 my-lg-0 justify-content-center" action="alta_pelicula.php" method="get">
      <fieldset class="text-warning">

      Titulo:<?php
                    if(isset ($_GET ["tituvacio"])){
                      echo "&nbsp;Titulo no puede estar vacio ";//compruebo que titulo no este vacio
                    }
                    ?>
      <br/>
          <input name="titulo" class=" mr-sm-2 form-control" type="text" placeholder="Titulo">
          <br/><br/>
      Titulo Original:
      <br/>
          <input name="tituloriginal" class=" mr-sm-2 form-control" type="text" placeholder="Titulo Original">
          <br/><br/>
      Produccion:
      <br/>
          <input name="produccion" class=" mr-sm-2 form-control" type="text" placeholder="Produccion">
          <br/><br/>
       Duracion:
      <br/>
          <input name="duracion" class=" mr-sm-2 form-control" type="text" placeholder="duracion">
          <br/><br/>
      Calificacion:
        <br/>
          <input name="calificacion" class=" mr-sm-2 form-control" type="text" placeholder="calificacion">
          <br/><br/>
      Genero:
      <br/>
        <select name="genero" class=" mr-sm-2 form-control">
          <?php
            $sql = "SELECT * FROM generos;";//llamo a las filas de genero
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostramos por pantalla.
                while($row = $result->fetch_assoc()) {
                    echo "<option value='".$row['id']."'>" .utf8_encode($row["genero"]). "</option>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();//cierro conexion
            ?>
        </select>
        <br/><br/>
          <button class="btn btn-outline-danger btn-sm my-2 my-sm-0 justify-content-center" type="submit">&nbsp;&nbsp;Añadir&nbsp;&nbsp;</button>&nbsp;&nbsp;
        </form><br/><br/>
        <a class="text-warning" href="listado.php"><h5 class="sombra">-----volver a la zona privada-----</h5></a>
         <?php
      if(isset ($_GET ["error"])){
        echo "Error al añadir Pelicula";//aviso de error al insertar
      }
       if(isset ($_GET ["añadida"])){
        echo "Pelicula añadida correctamente";//aviso peliculla añadida correctamente
      }

      ?>
      </fieldset>
    </form>
    <br/><br/><br/><br/>
  </div>
</body>
</html>