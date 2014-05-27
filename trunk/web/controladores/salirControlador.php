<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controladores;

require_once '../../persistencia/sesion/usuariosFacade.php';

use sesion\usuariosFacade as facadeUsuarios;

$facade = new facadeUsuarios();
$facade->actualizarIdSession($_POST['id']);
session_destroy();
