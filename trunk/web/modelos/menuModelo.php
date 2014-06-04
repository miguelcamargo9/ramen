<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuModelo
 *
 * @author open12
 */

namespace modelos;

include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/configuracion/configuracionGeneral.php';
require_once BASE_PATH . '/persistencia/sesion/menuFacade.php';
require_once BASE_PATH . '/persistencia/sesion/permisosFacade.php';

class menuModelo {

  //put your code here
  public function crearMenuPorIdPerfil($idPerfil = "") {
    $permisosFac = new \sesion\permisosFacade();
    $menuFac = new \sesion\menuFacade();
    $mPadres = array();
    $mHijos = array();
    $mPermisos = $permisosFac->permisosPorId($_SESSION['idPerfil']);
    for ($i = 0; $i < count($mPermisos); $i++) {
      $menuDevuelto = $menuFac->menuPorId($mPermisos[$i]['idOpcionMenu']);
      if ($menuDevuelto['idPadre'] == "" || $menuDevuelto['idPadre'] == "null") {
        $mPadres[] = $menuDevuelto;
      } else {
        $mHijos[] = $menuDevuelto;
      }
    }

    foreach ($mPadres as $padre) {
      $sMenu .= "<li>";
      $sMenu .= "<a href=\"" . $padre['enlace'] . "\"> <i class=\"fa fa-bookmark fa-fw\">" . $padre['descripcion'] . "</i><span class = \"fa arrow\"></span></a> ";
      $sMenu .= "<ul class = \"nav nav-second-level\">";
      foreach ($mHijos as $hijo) {
        if ($padre['id'] == $hijo['idPadre']) {
          $sMenu .= "<li>";
          $sMenu .= "<a onclick = \"f_link('" . $hijo['enlace'] . "')\">" . $hijo['descripcion'] . "</a>";
          $sMenu .= "</li>";
        }
      }
      $sMenu .="</ul>";
      $sMenu .= "</li>";
    }
    return $sMenu;
  }

}
