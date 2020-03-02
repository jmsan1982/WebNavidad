<?php 
$title = 'Inicio';
include('header.php');
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/esdla.jpg"alt="El señor de los anillos">
      <div class="carousel-caption d-none d-md-block text-ligth">
        <a class="text-white" href="pelicula.php?id=2149"><h2 class="sombra">¡Que es mejor!</h2></a>
        <h3 class="sombra">El libro o la pelicula</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/starwars.jpg" alt="Star Wars">
      <div class="carousel-caption d-none d-md-block text-ligth">
        <a class="text-white" href="pelicula.php?id=2111"><h2 class="sombra">Muchas peliculas</h2></a>
        <h3 class="sombra">Como verlas en orden cronologico</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/vikings.jpg" alt="Vikings">
      <div class="carousel-caption d-none d-md-block text-ligth">
        <a class="text-white" href="pelicula.php?id=1230"><h2 class="sombra">¡Vikingos!</h2></a>
        <h3 class="sombra">Sangre, sudor y mucho sexo</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/spiderman.jpg" alt="Spiderman">
      <div class="carousel-caption d-none d-md-block text-ligth">
        <a class="text-white" href="pelicula.php?id=1927"><h2 class="sombra">¡Nuevo universo!</h2></a>
        <h3 class="sombra">La araña lo peta</h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>


<br/>
<?php include('listado.php');?>
<?php include('footer.php');?>
