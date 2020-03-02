


              <div class="panel panel-info">
                <div class="panel-heading">
                  <?php                  
                    $img=rand(0,$tamanyo); 
                    $row = $result->fetch_assoc();
                    echo "<img width='150' src="'.$imagen[$img].'">";
                    ?>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                          <tbody>
                            <?php
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                             if($row["sinopsis"]==""){
                               echo "<tr>
                               <td>Sinopsis</td>
                               <td>Sin especificar</td>
                               </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                             }else{
                              echo "<tr>
                              <td>Sinopsis:</td>
                              <td class='text-primary'>" .utf8_encode($row["sinopsis"])."</td>
                              </tr>";
                            }
                            if($row["titulo"]==""){
                             echo "<tr>
                             <td>titulo:</td>
                             <td>Sin especificar</td>
                             </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                           }else{
                            echo "<tr>
                            <td>titulo:</td>
                            <td>" .utf8_encode($row["titulo"])."</a></td
                            </tr>";
                          }
                          if($row["titulo_original"]==""){
                           echo "<tr>
                           <td>titulo_original:</td>
                           <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>titulo_original:</td>
                              <td>" .utf8_encode($row["titulo_original"])."</td>
                              </tr>";
                            }
                            if($row["produccion"]==""){
                             echo "<tr>
                             <td>produccion:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>produccion:</td>
                              <td>" .utf8_encode($row["produccion"])."</td>
                              </tr>";
                            }
                            if($row["duracion"]==""){
                             echo "<tr>
                             <td>duracion:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>duracion:</td>
                              <td>" .utf8_encode($row["duracion"])."</td>
                              </tr>";
                            }
                            if($row["calificacion"]==""){
                             echo "<tr>
                             <td>calificacion:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>calificacion:</td>
                              <td>" .utf8_encode($row["calificacion"])."</td>
                              </tr>";
                            }
                            if($row["actores"]==""){
                             echo "<tr>
                             <td>actores:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>actores:</td>
                              <td>" .utf8_encode($row["actores"])."</td>
                              </tr>";
                            }
                            if($row["directores"]==""){
                             echo "<tr>
                             <td>directores:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>directores:</td>
                              <td>" .utf8_encode($row["directores"])."</td>
                              </tr>";
                            }
                            if($row["estudios"]==""){
                             echo "<tr>
                             <td>estudios:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>estudios:</td>
                              <td>" .utf8_encode($row["estudios"])."</td>
                              </tr>";
                            }
                            if($row["genero"]==""){
                             echo "<tr>
                             <td>genero:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>genero:</td>
                              <td>" .utf8_encode($row["genero"])."</td>
                              </tr>";
                            }
                            if($row["distribuidoras"]==""){
                             echo "<tr>
                             <td>distribuidoras:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>distribuidoras:</td>
                              <td>" .utf8_encode($row["distribuidoras"])."</td>
                              </tr>";
                            }
                            if($row["fotografo"]==""){
                             echo "<tr>
                             <td>fotografo:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>fotografo:</td>
                              <td>" .utf8_encode($row["fotografo"])."</td>
                              </tr>";
                            }
                            if($row["guionistas"]==""){
                             echo "<tr>
                             <td>guionistas:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>guionistas:</td>
                              <td>" .utf8_encode($row["guionistas"])."</td>
                              </tr>";
                            }
                            if($row["montadores"]==""){
                             echo "<tr>
                             <td>montadores:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>montadores:</td>
                              <td>" .utf8_encode($row["guionistas"])."</td>
                              </tr>";
                            }
                            if($row["musicos"]==""){
                             echo "<tr>
                             <td>musicos:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>musicos:</td>
                              <td>" .utf8_encode($row["musicos"])."</td>
                              </tr>";
                            }
                            if($row["nacionalidad"]==""){
                             echo "<tr>
                             <td>nacionalidad:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>nacionalidad:</td>
                              <td>" .utf8_encode($row["nacionalidad"])."</td>
                              </tr>";
                            }
                            if($row["productor"]==""){
                             echo "<tr>
                             <td>productor:</td>
                             <td>Sin especificar</td>
                              </tr>";//si la consulta sale vacia se rellena con el campo sin especificar
                            }else{
                              echo "<tr>
                              <td>productor:</td>
                              <td>" .utf8_encode($row["productor"])."</td>
                              </tr>";
                            }
                          }
                          ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
                </div>
