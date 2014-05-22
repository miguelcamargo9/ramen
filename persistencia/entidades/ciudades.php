<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ciudades
 *
 * @author Sebastian Rojas
 */
namespace entidades;
define("insert", "INSERT INTO ciudades (id, nombre, activo) values (:id,:nombre,:ciudades) ");
define("updateDescripcion", "UPDATE ciudades SET ciudades = :ciudades WHERE id = :id ");
define("updateEstado", "UPDATE ciudades SET activo = :estado WHERE id = :id ");
define("selectAll", "SELECT * from ciudades ");

class ciudades {
  private $insert;
  private $update;
  private $delete;
  private $selectPreparate = array();
  function __construct() {
    $this->insert = insert;
    $this->update = updateDescripcion;
    $this->delete = "";
    $this->selectPreparate = array(selectAll);
  }
  public function getInsert() {
    return $this->insert;
  }

  public function getUpdate() {
    return $this->update;
  }

  public function getDelete() {
    return $this->delete;
  }

  public function getSelectPreparate() {
    return $this->selectPreparate;
  }

  public function setInsert($insert) {
    $this->insert = $insert;
  }

  public function setUpdate($update) {
    $this->update = $update;
  }

  public function setDelete($delete) {
    $this->delete = $delete;
  }

  public function setSelectPreparate($selectPreparate) {
    $this->selectPreparate = $selectPreparate;
  }


  


}
