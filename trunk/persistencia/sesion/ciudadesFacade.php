<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ciudadesFacade
 *
 * @author Sebastian Rojas
 */

namespace sesion;

include_once 'abstractFacade.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/persistencia/entidades/ciudades.php';

class ciudadesFacade {

  private $em;
  function __construct() {
    $config = array("DB" => "mysql");
    $abstract = new \abstractFacade();
    $abstract->conectar($config);
    $this->em = $abstract->getEm();
  }

  public function query() {
    $entidad = new \entidades\ciudades();
    $query = $entidad->getSelectPreparate();
    foreach ($this->em->query($query[0]) as $fila) {
      print_r($fila);
    }
  }

  //put your code here
}
