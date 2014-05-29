<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace modelo;

include_once $_SERVER['DOCUMENT_ROOT'].'/ramen/configuracion/configuracionGeneral.php';
include_once BASE_PATH.'/persistencia/sesion/usuariosFacade.php';

use sesion\usuariosFacade as facadeUsuario;
class sessionModelo {

  public $nombre;
  public $apellido;
  public $id;
  public $session_id;

  function __construct($nombre, $apellido, $id) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->id = $id;
    $this->session_id = "";
    $this->guardarIdSession();
  }

  public function guardarIdSession() {
    $facade = new facadeUsuario();
    $vInfoUser = $facade->infoUser($this->id);
    if ($vInfoUser['existe']) {
      $vDatosUsuario = $vInfoUser['datos'];
      if ($vDatosUsuario['sessionActiva'] == "") {
        $_SESSION['id'] = $this->id;
        $_SESSION['nombre'] = $this->nombre;
        $_SESSION['apellido'] = $this->apellido;
        $_SESSION['idPerfil'] = $vDatosUsuario['idPerfil'];
        $_SESSION['idSede'] = $vDatosUsuario['idSede'];
        $facade->actualizarIdSession($vDatosUsuario['id'], session_id());
      } else {
        $_SESSION['error'] = "su sesion ya se encuentra activa";
      }
    }
  }

}
