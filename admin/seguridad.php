<?php
  session_start();

  if(!isset($_SESSION["autenticado"]))
  { 
    header("Location: ../index.php"); 
    exit(); 
  }
  $id_usuarios = $_SESSION['id_usuarios'];
  $tipo = $_SESSION['tipo'];
  ?>