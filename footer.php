 <script type="text/javascript"> 
      var CookiesAlert = {//aviso cookies
          visits: 0,
          maxVisits: 3,
          message: "Nos obligan a molestarte con el aviso de cookies, no te enfades con nosotros",
          style:"text-align:center;position:fixed;top: 50px; width:100%; height:50px;background:rgba(29,29,29,0.1);color:#FAA002;padding:10px",
          closeLabel: 'Cerrar',
          
          init: function(){    
              var self = this;
              if (localStorage){
                  self.visits = localStorage.getItem('visits') || 0;
                  self.visits++;
                  localStorage.setItem('visits', self.visits); 
                  
                  if (self.visits < self.maxVisits){
                      this.show();
                  }            
              }else{
                  
                  this.show();
              }    
          },
          show: function(){
              var self = this;
              
              var content = '<div id="cookiesAlert" style="'+self.style+'">'+self.message+' <a class="btn btn-outline-danger" id="closeCookiesAlert" onClick="localStorage.setItem(\'visits\','+self.maxVisits+');var elem = document.getElementById(\'cookiesAlert\');elem.parentNode.removeChild(elem);">'+self.closeLabel+'</a></div>';
              document.write(content);        
          }
      }.init();
    </script>
<div style="text-align: center;" class="bg-ligth mb-0 border border-dark">
    <h2 class="text-danger">Puedes seguirnos en nuestras redes sociales:</h2>
    <table class="table table-bordered table-striped mb-0">
      <tr>
        <td><a href="http://facebook.com" class="fa fa-facebook-official text-primary"></a></td>
        <td><a href="http://twitter.com" class="fa fa-twitter text-primary"></a></td>
        <td><a href="https://instagram.com" class="fa fa-instagram text-primary"></a></td>
      </tr>
    </table>
    <p class="text-danger">Todos los derechos reservados a Bajatepelis</p><br/>
    </div>
   <?php
    $conn->close();//cierro la conexion a la bbdd
    ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </body>
</html>