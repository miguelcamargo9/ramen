<?php

namespace sesion;

include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/configuracion/configuracionGeneral.php';
include_once 'abstractFacade.php';
include_once BASE_PATH . '/persistencia/entidades/productos.php';

use entidades\productos as produc;

/**
 * Description of productosFacade
 *
 * @author Sebastian Rojas
 */
class productosFacade {

  //put your code here
  private $em;

  function __construct() {
    $config = array("DB" => "pgsql");
    $abstract = new \abstractFacade();
    $abstract->conectar($config);
    $this->em = $abstract->getEm();
  }

  public function guardarProducto($id = "", $descripcion = "") {
    $productosDao = new produc();
    $insert = $productosDao->getInsertar();
    try {
      $estado = true;
      $sentencia = $this->em->prepare("$insert");
      $sentencia->bindParam(':id', $id);
      $sentencia->bindParam(':descripcion', $descripcion);
      $sentencia->bindParam(':estado', $estado);
      $sentencia->execute();
    } catch (PDOException $exc) {
      echo "error al insertar :D";
      echo $exc->getMessage();
    }
  }

  public function productos() {
    $productosDao = new \entidades\productos();
    $vQuerys = $productosDao->getSelectPreparate();
    $sentencia = $this->em->prepare("$vQuerys[0]");
    $sentencia->execute();
    $mProductos = $sentencia->fetchAll();
    return $mProductos;
  }

}
