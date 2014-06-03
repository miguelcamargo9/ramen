<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controladores;
require_once '../../persistencia/sesion/usuariosFacade.php';
session_start();
$facade = new \sesion\usuariosFacade();
$bandera = $facade->validarUsuario($_POST['nickname'], $_POST['pass']);
if ($bandera['ingreso']) {
  include_once '../modelos/sessionModelo.php';
  $model = new \modelo\sessionModelo($bandera['datos']['primerNombre'], $bandera['datos']['primerApellido'], $bandera['datos']['id']);
  if ($_SESSION['error'] == "") {
    header("Location: ../../web/vistas/menu.php");
  } else {
    header("Location: ../../web/error.php");
  }
} else {
  session_start();
  $_SESSION['error'] = $bandera['error'];
  header("Location: ../../web/error.php");
}

