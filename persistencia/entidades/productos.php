<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producto
 *
 * @author Sebastian Rojas
 */
namespace entidades;
define("insertarProducto", "INSERT INTO productos (id, descripcion, estado) VALUES (:id, :descripcion, :estado) ");
define("todosProducto", "SELECT * FROM productos ");
define("productoPorId", "SELECT * FROM productos WHERE id = :id ");
class productos {
  private $insertar;
  private $selectPreparate = array();
  //put your code here
  function __construct() {
    $this->insertar = insertarProducto;
    $this->selectPreparate = array(todosProducto, productoPorId);
  }
  public function getInsertar() {
    return $this->insertar;
  }

  public function getSelectPreparate() {
    return $this->selectPreparate;
  }

  public function setInsertar($insertar) {
    $this->insertar = $insertar;
  }

  public function setSelectPreparate($selectPreparate) {
    $this->selectPreparate = $selectPreparate;
  }



}
