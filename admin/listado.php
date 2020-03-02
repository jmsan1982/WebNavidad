<?php
include('seguridad.php');//llamo header zona admin
include('headeradmin.php');
?>
<script type="text/javascript">
  function eliminarPelicula($id){
    var mensaje;
    var opcion = confirm("¿Seguro que quieres eliminar esta pelicula?");
    if (opcion == true) {
      location.href ="eliminar_pelicula.php?id=" + $id;
    }   
  }
  </script>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <img src="../imagenes/bajatepelis.png" class="rounded" width="110"></img>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-warning"  href="../index.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">

        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="listar_usuarios.php" method="get">
        <button class="btn btn-outline-warning btn-sm my-2 my-sm-0" type="submit">&nbsp;Listar usuarios&nbsp;</button>&nbsp;&nbsp;</form>
        <form class="form-inline my-2 my-lg-0" action="añadir_usuario.php" method="post">
          <button class="btn btn-outline-warning btn-sm my-2 my-sm-0" type="submit">&nbsp;Añadir usuario&nbsp;</button>
        </form>&nbsp;&nbsp;
        <form class="form-inline my-2 my-lg-0" action="insertar_pelicula.php" method="get">
          <button class="btn btn-outline-warning btn-sm my-2 my-sm-0" type="submit">&nbsp;Nueva Pelicula&nbsp;</button>
        </form>&nbsp;&nbsp;
        <form class="form-inline my-2 my-lg-0" action="salir.php" method="post">
          <button class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="submit">&nbsp;Salir&nbsp;</button>
        </form>&nbsp;&nbsp;
      </nav>
      <table class="table table-dark" id="tabla_peliculas">
        <thead>
          <tr>
            <th scope="col" class="text-warning text-center">Modificar/Eliminar</th>
            <th scope="col" class="text-warning text-center">Imagen</th>
            <th scope="col" class="text-warning text-center">Titulo</th>
            <th scope="col" class="text-warning text-center">Duración</th>
            <th scope="col" class="text-warning text-center">Genero</th>
          </tr>
        </thead>
        <tbody class="table-dark">
         <?php
         $sql = "select p.id,p.titulo, p.duracion, g.genero
         from peliculas p, peliculas_generos pg, generos g
         where p.id = pg.pelicula_id and pg.genero_id = g.id and estado = 0
                order by p.id";//aqui listo las peliculas en la zona privada
                $result = $conn->query($sql);
        if ($result->num_rows > 0) {//esto es un random de imagenes
          $imagen[0]='../imagenes/imagenesrow/starwarsr.jpg';
          $imagen[1]='../imagenes/imagenesrow/startrekr.jpg';
          $imagen[2]='../imagenes/imagenesrow/esdlar.jpg';
          $imagen[3]='../imagenes/imagenesrow/spidermanr.jpg';
          $imagen[4]='../imagenes/imagenesrow/infinityr.jpg';
          $imagen[5]='../imagenes/imagenesrow/starwars2r.jpg';
          $imagen[6]='../imagenes/imagenesrow/startrek2r.jpg';
          $imagen[7]='../imagenes/imagenesrow/ironman.jpg';
          $imagen[8]='../imagenes/imagenesrow/warcraft.jpg';
          $imagen[9]='../imagenes/imagenesrow/brave.jpg';
          $tamanyo = (int) sizeof($imagen);
          $tamanyo--;
          while($row = $result->fetch_assoc()) {
           echo "<tr>";
           $img=rand(0,$tamanyo); 
                echo "<td class='text-center'> <a class='text-warning' href='modificar_pelicula.php?id=".$row['id']."'/><i class='fas fa-edit'></i>&nbsp;&nbsp;<a href='#' OnClick='eliminarPelicula(".$row['id'].");'/>
                    <i class='fas fa-trash-alt' style='color:#fb061c;'></i></td>";//botones para modificar y eliminar peliculas
                echo "<td class='text-center'>" .'<img width="55" src="'.$imagen[$img].'">'. "</td>";
                echo "<td class='text-center'>" ." <a class='text-danger' href='../pelicula.php?id=".$row['id']."'>".utf8_encode($row["titulo"])."</td>";
            if($row["duracion"]==""){
                echo "<td class='text-danger text-center'>Sin especificar</td>";//si la consulta sale vacia se rellena con el campo sin especificar
              }else{
                echo "<td class='text-danger text-center'>" .utf8_encode($row["duracion"])."</td>"; //si da bien se añade
              }if($row["genero"]==""){
                echo "<td class='text-danger text-center'>Sin especificar</td>";//si la consulta sale vacia se rellena con el campo sin especificar
              }else{
                echo "<td class='text-danger text-center'>" .utf8_encode($row["genero"])."</td>"; //si da bien se añade
              }
              echo "</tr>";
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </body>
  </html>
  <script language="javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>


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
   {"data": 4},
   ],  
 });
    $('label').addClass('form-inline');
    $('select, input[type="search"]').addClass('form-control input-sm');
  </script>
  <script language="javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

