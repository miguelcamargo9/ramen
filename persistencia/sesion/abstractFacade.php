<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of abstractFacade
 *
 * @author Sebastian Rojas
 */


require_once 'entityManager.php';

class abstractFacade {

  public $em;

  public function conectar($configuracion = array()) {
    $entity = new entityManager($configuracion);
    $entity->conectar();
    $this->em = $entity->getConexion();
  }

  public function getEm() {
    return $this->em;
  }


}
