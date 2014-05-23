<?php

namespace controladores;

if (isset($_SESSION)) {
  header("Location: web/error.php");
} 

