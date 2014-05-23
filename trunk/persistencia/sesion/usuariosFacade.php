<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuariosFacade
 *
 * @author Sebastian Rojas
 */

namespace sesion;

include_once 'abstractFacade.php';

class usuariosFacade {

  private $em;

  function __construct() {
    $config = array("DB"=>"pgsql");
    $abstract = new \abstractFacade();
    $abstract->conectar($config);
    $this->em = $abstract->getEm();
  }

  public function query() {
    foreach ($this->em->query("SELECT * FROM usuarios") as $fila) {
      print_r($fila);
    }
  }

  static function validarUsuario($nickname = "", $pass = "") {
    if ($nickname == "sebastian" && $pass == "sebastian") {
      $bandera = TRUE;
    } else {
      $bandera = FALSE;
    }
    return $bandera;
  }

}
