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
include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/persistencia/entidades/ciudades.php';

class usuariosFacade {
  private $em;
  function __construct() {
    $config = array("DB" => "pgsql");
    $abstract = new \abstractFacade();
    $abstract->conectar($config);
    $this->em = $abstract->getEm();
  }
  public function query() {
    foreach ($this->em->query("SELECT * FROM usuarios") as $fila) {
      print_r($fila);
    }
  }

}
