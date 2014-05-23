<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controladores;

use sesion\usuariosFacade as sebas;

session_start();
$facade = new sebas();
$bandera = $facade->validarUsuario($_POST['nickname'], $_POST['pass']);
if ($bandera) {
  $_SESSION['usuario'] = "Sebastian Rojas";
  $_SESSION['id'] = "1016036869";
  header("Location: web/vistas/menu.php");
} else {
  session_destroy();
  header("Location: web/error.php");
}

