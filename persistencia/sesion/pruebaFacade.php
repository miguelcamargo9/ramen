<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace sesion;

include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/configuracion/configuracionGeneral.php';
include_once 'abstractFacade.php';
/**
 * Description of pruebaFacade
 *
 * @author Sebastian Rojas
 */
class pruebaFacade {
  //put your code here
  private $em;
  function __construct() {
    $config = array("DB" => "oracle");
    $abstract = new \abstractFacade();
    $abstract->conectar($config);
    $this->em = $abstract->getEm();
  }
  public function query() {
    foreach ($this->em->query("SELECT * FROM PRUEBA") as $fila) {
      print_r($fila);
    }
  }

}
