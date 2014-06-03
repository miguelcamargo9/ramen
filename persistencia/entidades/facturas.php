<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace entidades;
define("selectAll", "SELECT * from facturas ");

class facturas{
  private $selectPreparate = array();
  
  function __construct() {
    $this->selectPreparate = array(selectAll);
  }
  
  public function getSelectPreparate() {
    return $this->selectPreparate;
  }

  public function setSelectPreparate($selectPreparate) {
    $this->selectPreparate = $selectPreparate;
  }

}
?>
