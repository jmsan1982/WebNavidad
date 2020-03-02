<?php include('headeradmin.php');//llamo header zona privada


?>
<script type="text/javascript">
  function eliminarUsuario($id_usuario){
    var mensaje;
    var opcion = confirm("¿Seguro que quieres eliminar el usuario?");
    if (opcion == true) {
      location.href ="eliminar_usuario.php?id_usuario=" + $id_usuario;
    }   
  }
</script>
<body class="bg-ligth">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <img src="../imagenes/bajatepelis.png" class="rounded" width="110"></img>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-warning"  href="listado.php">Volver al Listado<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">

        </li>
      </ul>

    </nav>
    <table class="table table-bordered table-dark mb-0" id="tabla_usuarios">
      <thead>
        <tr>
          <th scope="col" class="text-warning text-center">Modificar/Eliminar</th>
          <th scope="col" class="text-warning text-center">Usuario</th>
          <th scope="col" class="text-warning text-center">Tipo</th>
        </tr>
      </thead>
      <tbody>
       <?php
		$sql = "select * from usuarios";//select de todos los campos de la tabla usuarios
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
     echo "<tr>";
     echo "<td class='text-center'> <a class='text-warning' href='modificar_usuario.php?id_usuario=".$row['id_usuario']."'/><i class='fas fa-edit'></i>&nbsp;&nbsp;<a href='#' OnClick='eliminarUsuario(".$row["id_usuario"].");'/>
                    <i class='fas fa-trash-alt' style='color:#fb061c;'></i></td>";//botones para modificar y eliminar peliculas
              if($row["usuario"]==""){
                echo "<td class='text-danger text-center'>Sin especificar</td>";//si la consulta sale vacia se rellena con el campo sin especificar
              }else{
                echo "<td class='text-danger text-center'>" .utf8_encode($row["usuario"])."</td>"; //si da bien sale el usuario
              }

              if($row["tipo"]==""){
                echo "<td class='text-danger text-center'>Sin especificar</td>";//si la consulta sale vacia se rellena con el campo sin especificar
              }else{
                echo "<td class='text-danger text-center'>" .utf8_encode($row["tipo"])."</td>"; //si sale bien sale la fecha de alta
              }

              echo "</tr>";
            }

            ?>
          </tbody>
        </table>
      </body>
      </html>
      <script language="javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
      <script type="text/javascript">

        var objetoDataTables_usuarios = $('#tabla_usuarios').DataTable({
         "language": {
          "emptyTable":   "No hay datos disponibles.",
          "info":       "Del _START_ al _END_ de _TOTAL_ ",
          "infoEmpty":   "Mostrando 0 usuarios de un total de 0.",
          "infoFiltered":   "(filtrados de un total de _MAX_ usuarios)",
          "infoPostFix":   "(actualizados)",
          "lengthMenu":   "Mostrar _MENU_ usuarios",
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
       ],  
     });
        $('label').addClass('form-inline');
        $('select, input[type="search"]').addClass('form-control input-sm');
      </script>
      <script language="javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

