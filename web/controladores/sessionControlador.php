<?php

namespace controladores;
session_start();
if (session_id() == "") {
  $_SESSION['error'] = "No se registro en el sistema por favor verifique";
  header("Location: ../../web/error.php");
} 

