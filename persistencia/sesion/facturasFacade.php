<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace sesion;

include_once 'abstractFacade.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/persistencia/entidades/facturas.php';

class ciudadesFacade {

  private $em;
  function __construct() {
    $config = array("DB" => "oracle");
    $abstract = new \abstractFacade();
    $abstract->conectar($config);
    $this->em = $abstract->getEm();
  }

  public function query() {
    $entidad = new \entidades\facturas();
    $query = $entidad->getSelectPreparate();
    foreach ($this->em->query($query[0]) as $fila) {
      print_r($fila);
    }
  }

  //put your code here
}

?>