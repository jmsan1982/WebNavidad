<script language="javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
<div class="col">
<table class="table table-striped table-bordered" id="tabla_peliculas">
  <thead>
    <tr class="text-danger text-center">
      <th scope="col">Imagen</th>
      <th scope="col">Titulo</th>
      <th scope="col">Duración</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody class="text-primary text-center">
     <?php
    $sql = "select p.id,p.titulo, p.duracion, g.genero
    from peliculas p, peliculas_generos pg, generos g
    where p.id = pg.pelicula_id and pg.genero_id = g.id and estado = 0
    order by p.id";
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
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        $img=rand(0,$tamanyo); 
        echo "<td>" .'<img width="80" src="'.$imagen[$img].'">'. "</td>";
        echo "<td>" ." <a href='pelicula.php?id=".$row['id']."'>".utf8_encode($row["titulo"])."</td>";
        if($row["duracion"]==""){
          echo "<td>Sin especificar</td>";
        }else{
          echo "<td>" .utf8_encode($row["duracion"])."</td>"; 
        }if($row["genero"]==""){
          echo "<td>Sin especificar</td>";
        }else{
          echo "<td>" .utf8_encode($row["genero"])."</td>"; 
        }
        echo "</tr>";
      }
    }
    ?>
  </tbody>
</table>
</div>



<script type="text/javascript">

  var objetoDataTables_peliculas = $('#tabla_peliculas').DataTable({
   "language": {
    "emptyTable":   "No hay datos disponibles.",
    "info":       "Del _START_ al _END_ de _TOTAL_ ",
    "infoEmpty":   "Mostrando 0 Peliculas de un total de 0.",
    "infoFiltered":   "(filtrados de un total de _MAX_ Peliculas)",
    "infoPostFix":   "(actualizados)",
    "lengthMenu":   "Mostrar _MENU_ Peliculas",
    "loadingRecords":  "Cargando...",
    "processing":   "Procesando...",
    "search":   "Buscar:",
    "searchPlaceholder":  "Buscar",
    "zeroRecords":   "No se han encontrado coincidencias.",    
    "paginate": {
     "first":   "Primera",
     "last":    "Última",
     "next":    "Siguiente",
     "previous":   "Anterior"
   },
   "aria": {
     "sortAscending": "Ordenación ascendente",
     "sortDescending": "Ordenación descendente"
   },
 },
 "order": [[ 1, "asc" ]],
 "bJQueryUI":  false, 
 "columns" : [
 {"data": 0, 'orderable': false, 'searchable': false},
 {"data": 1},
 {"data": 2},
 {"data": 3},
 ],  
});
  $('label').addClass('form-inline');
  $('select, input[type="search"]').addClass('form-control input-sm');
</script>
<script language="javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
