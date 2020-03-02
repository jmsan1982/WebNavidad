<?php
$title = 'Pelicula';
include('header.php');
$id = $_GET["id"];
    $sql = "select *, 
            (select GROUP_CONCAT(sinopsis)
            from peliculas_sinopsis psis where psis.pelicula_id = $id) sinopsis,
            (select GROUP_CONCAT(actor SEPARATOR '<br/> ')
            from actores act, peliculas_actores pa where pa.pelicula_id = $id and pa.actor_id = act.id) actores,
            (select GROUP_CONCAT(director SEPARATOR '<br/>') 
            from directores dir, peliculas_directores pd where pd.pelicula_id = $id and pd.director_id = dir.id) directores,
            (select GROUP_CONCAT(estudio SEPARATOR '<br/>')
            from estudios est, peliculas_estudios pe where pe.pelicula_id = $id and pe.estudio_id = est.id) estudios,
            (select GROUP_CONCAT(genero SEPARATOR '<br/>')
            from generos gen, peliculas_generos pg where pg.pelicula_id = $id and pg.genero_id = gen.id) genero,
            (select GROUP_CONCAT(distribuidora SEPARATOR '<br/>')
            from distribuidoras dis, peliculas_distribuidoras pd where pd.pelicula_id = $id and pd.distribuidora_id = dis.id) distribuidoras,
            (select GROUP_CONCAT(fotografo SEPARATOR '<br/>')
            from fotografos fo, peliculas_fotografos pf where pf.pelicula_id = $id and pf.fotografo_id = fo.id) fotografo,
            (select GROUP_CONCAT(guionista SEPARATOR '<br/>')
            from guionistas gui, peliculas_guionistas pgui where pgui.pelicula_id = $id and pgui.guionista_id = gui.id) guionistas,
            (select GROUP_CONCAT(montador SEPARATOR '<br/>')
            from montadores mon, peliculas_montadores pmon where pmon.pelicula_id = $id and pmon.montador_id = mon.id) montadores,
            (select GROUP_CONCAT(musico SEPARATOR '<br/>')
            from musicos mus, peliculas_musicos pmus where pmus.pelicula_id = $id and pmus.musico_id = mus.id) musicos,
            (select GROUP_CONCAT(nacionalidad SEPARATOR '<br/>')
            from nacionalidades na, peliculas_nacionalidades pna where pna.pelicula_id = $id and pna.nacionalidad_id = na.id) nacionalidad,
            (select GROUP_CONCAT(productor SEPARATOR '<br/>')
            from productores pro, peliculas_productores ppro where ppro.pelicula_id = $id and ppro.productor_id = pro.id) productor

            from peliculas p where p.id = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
              $imagen[0]='imagenes/imagenesrow/starwarsr.jpg';
              $imagen[1]='imagenes/imagenesrow/startrekr.jpg';
              $imagen[2]='imagenes/imagenesrow/esdlar.jpg';
              $imagen[3]='imagenes/imagenesrow/spidermanr.jpg';
              $imagen[4]='imagenes/imagenesrow/infinityr.jpg';
              $imagen[5]='imagenes/imagenesrow/starwars2r.jpg';
              $imagen[6]='imagenes/imagenesrow/startrek2r.jpg';
              $imagen[7]='imagenes/imagenesrow/ironman.jpg';
              $imagen[8]='imagenes/imagenesrow/warcraft.jpg';
              $imagen[9]='imagenes/imagenesrow/brave.jpg';
              $tamanyo = (int) sizeof($imagen);
              $tamanyo--;
?> 
<div class='table-responsive-xs'>
<table class="table table-striped table-bordered mb-0">
  <thead>
    <tr> 
      <?php
      $img=rand(0,$tamanyo); 
      $row = $result->fetch_assoc();
      echo "<tr><td colspan='3' class='text-center'>" .'<img width="150" src="'.$imagen[$img].'">'. "</td>";
      if($row["sinopsis"]==""){
      echo "<td colspan='5' class='text-danger text-center'>Sin especificar</td></tr>";
      }else{
      echo "<td colspan='5' class='text-primary'>" .utf8_encode($row["sinopsis"])."</td></tr>"; 
      }
      ?>
      <th scope="col" class="text-danger text-center">Titulo</th>
      <th scope="col" class="text-danger text-center">Titulo original</th>
      <th scope="col" class="text-danger text-center">año</th>
      <th scope="col" class="text-danger text-center">Duración</th>
      <th scope="col" class="text-danger text-center">Puntuacion</th>
      <th scope="col" class="text-danger text-center">Actores</th>
      <th scope="col" class="text-danger text-center">Director</th>
      <th scope="col" class="text-danger text-center">estudio</th>
    </tr>
  </thead>
  <tbody>
<?php   
      
      echo "<tr class='text-primary text-center'>";       
            $result = $conn->query($sql);
            echo "<td>" .utf8_encode($row["titulo"])."</td>";
            if($row["titulo_original"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["titulo_original"])."</td>"; 
            }
            if($row["produccion"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["produccion"])."</td>"; 
            }
            if($row["duracion"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["duracion"])."</td>"; 
            }
            if($row["calificacion"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["calificacion"])."</td>"; 
            }
            if($row["actores"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["actores"])."</td>"; 
            }
            if($row["directores"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["directores"])."</td>"; 
            }
            if($row["estudios"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["estudios"])."</td>"; 
            }
      echo "</tr>";
           echo "<tr>";
           	echo "<td class='text-danger text-center'>Genero</td>";
           	echo "<td class='text-danger text-center'>Distribuidora</td>";
           	echo "<td class='text-danger text-center'>Fotografo</td>";
           	echo "<td class='text-danger text-center'>Guionista</td>";
           	echo "<td class='text-danger text-center'>Montador</td>";
           	echo "<td class='text-danger text-center'>Musico</td>";
           	echo "<td class='text-danger text-center'>Nacionalidad</td>";
           	echo "<td class='text-danger text-center'>Productor</td>";
      echo "</tr>";
      echo "<tr class='text-primary text-center'>";
            if($row["genero"]==""){
            echo "<td'>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["genero"])."</td>"; 
            }
            if($row["distribuidoras"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["distribuidoras"])."</td>"; 
            }
            if($row["fotografo"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["fotografo"])."</td>"; 
            }
            if($row["guionistas"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["guionistas"])."</td>"; 
            }
            if($row["montadores"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["montadores"])."</td>"; 
            }
            if($row["musicos"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["musicos"])."</td>"; 
            }
            if($row["nacionalidad"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["nacionalidad"])."</td>"; 
            }
            if($row["productor"]==""){
            echo "<td>Sin especificar</td>";
            }else{
            echo "<td>" .utf8_encode($row["productor"])."</td>"; 
            }
      echo "</tr>";
    	
    }

?>
  </tbody>
</table>
</div>
<?php
include('footer.php')		
?>