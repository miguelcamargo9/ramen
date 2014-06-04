<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace entidades;
define("selectAll", "SELECT * from facturas ");
define("selectMaxID", "SELECT MAX(id) from facturas ");
define("insertarFactura", "INSERT INTO facturas (cliente, valor) VALUES (:cliente, :valor) ");
define("insertarFacturaProducto", "INSERT INTO productosfactura (idfactura, idproducto, cantidad) VALUES (:idfactura, :idproducto, :cantidad); ");

class facturas{
  private $insertar;
  private $insertarD;
  private $selectPreparate = array();
  
  function __construct() {
    $this->insertar = insertarFactura;
    $this->insertarD = insertarFacturaProducto;
    $this->selectPreparate = array(selectAll, selectMaxID);
  }
  
  public function getInsertar() {
    return $this->insertar;
  }
  
  public function getInsertarD() {
    return $this->insertarD;
  }
  
  public function getSelectPreparate() {
    return $this->selectPreparate;
  }

  public function setSelectPreparate($selectPreparate) {
    $this->selectPreparate = $selectPreparate;
  }

}
?>
