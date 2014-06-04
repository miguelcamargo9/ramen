<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace sesion;

include_once 'abstractFacade.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/persistencia/entidades/facturas.php';

use entidades\facturas as fact;


class facturasFacade {

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
  
  public function guardarFactura($cliente = "", $total = "") {
    $facturaDao = new fact();
    $insert = $facturaDao->getInsertar();
    $queryMax = $facturaDao->getSelectPreparate();
    try {
      $this->em->beginTransaction(); 
      $sentencia = $this->em->prepare("$insert");
      $sentencia->bindParam(':cliente', $cliente);
      $sentencia->bindParam(':valor', $total);
      $sentencia->execute();
      $sentencia1 = $this->em->prepare("$queryMax[1]");
      $sentencia1->execute();
      $mProductos = $sentencia1->fetch();
      return $mProductos[0];
    } catch (PDOException $exc) {
      echo "error al insertar :D";
      echo $exc->getMessage();
    }
  }
  public function guardarFacturaProducto($idfactura = "", $idprodcuto = "", $cantidad = "") {
    echo $idfactura." = ".$idprodcuto." = ".$cantidad;
    $facturaDao = new fact();
    $insert = $facturaDao->getInsertarD();
    try {
      $sentencia = $this->em->prepare("$insert");
      $sentencia->bindParam(':idfactura', $idfactura);
      $sentencia->bindParam(':idproducto', $idprodcuto);
      $sentencia->bindParam(':cantidad', $cantidad);
      $sentencia->execute();
    } catch (PDOException $exc) {
      echo "error al insertar :D";
      echo $exc->getMessage();
    }
  }

  //put your code here
}

?>