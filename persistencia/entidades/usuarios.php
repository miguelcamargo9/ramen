<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarios
 *
 * @author open12
 */

namespace entidades;

define("selectAll", "SELECT * FROM usuarios ");
define("selectId", "SELECT * FROM usuarios WHERE id = :id ");
define("selectNickname", "SELECT * FROM usuarios WHERE nickname = :nickname");
define("updateIdSession", "UPDATE usuarios SET sessionActiva = :id_session WHERE id = :id ");

class usuarios {

  private $insert;
  private $update = array();
  private $delete;
  private $selectPreparate = array();

  function __construct() {
    $this->selectPreparate = array(selectAll, selectId, selectNickname);
    $this->update = array(updateIdSession);
  }

  public function getSelectPreparate() {
    return $this->selectPreparate;
  }

  public function getUpdate() {
    return $this->update;
  }

}
