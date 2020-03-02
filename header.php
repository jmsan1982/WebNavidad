<!DOCTYPE html>
<html>
<head>
  <?php
  include('conexion.php');
  ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
  <title><?=$title?> - Bajatepelis</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="imagenes/bajatepelis.png" class="rounded" width="130"></img>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-danger" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-danger"  href="index.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Genero A-D
          </a>
          <?php
          $sql = "select * from generos order by genero limit 12"; 
          $result = $conn->query($sql);
          ?>
          <div class="dropdown-menu text-danger bg-light" aria-labelledby="navbarDropdown">
           <?php 
           while($row = $result->fetch_assoc()) {
            echo '<a class="dropdown-item text-danger" href="categorias.php?cat='.$row["id"].'">'.utf8_encode($row["genero"]).'</a>';
          }
          ?>  
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Genero D-M
          </a>
          <?php
          $sql = "select * from generos where genero between 'Documental' and 'manga' order by genero;"; 
          $result = $conn->query($sql);
          ?>
          <div class="dropdown-menu text-danger bg-light" aria-labelledby="navbarDropdown">
           <?php 
           while($row = $result->fetch_assoc()) {
            echo '<a class="dropdown-item text-danger" href="categorias.php?cat='.$row["id"].'">'.utf8_encode($row["genero"]).'</a>';
          }
          ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Genero M-V
          </a>
          <?php
          $sql = "select * from generos where genero between 'melodrama' and 'violencia' order by genero;"; 
          $result = $conn->query($sql);
          ?>
          <div class="dropdown-menu text-danger bg-light" aria-labelledby="navbarDropdown">
           <?php 
           while($row = $result->fetch_assoc()) {
            echo '<a class="dropdown-item text-danger" href="categorias.php?cat='.$row["id"].'">'.utf8_encode($row["genero"]).'</a>';
          }
          ?>
        </li>
      </ul>
    </div>

    <a href="login.php" class="btn btn-outline-danger">Login  <i class="fas fa-sign-in-alt"></i></a>
  </nav>





