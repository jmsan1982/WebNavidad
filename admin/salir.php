<?php
include('seguridad.php');
 session_start();
 session_destroy(); 
 header("Location: ../login.php");
 //Redireccionamos a login.php (al inicio de sesión) 