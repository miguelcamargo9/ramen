<?php

namespace controladores;

session_start();
if ($_SESSION['nombre'] == "") {
  header("Location: ../../web/error.php");
} 

