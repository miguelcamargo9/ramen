<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of entityManager
 *
 * @author Sebastian Rojas
 */
include $_SERVER['DOCUMENT_ROOT'].'/ramen/configuracion/configuracionGeneral.php';

class entityManager {

  private $conexion;
  private $configuracion = array();

  function __construct($configuracion) {
    $this->configuracion = $configuracion;
  }

  function conectar() {
    switch ($this->configuracion['DB']) {
      case "mysql":
        try {
          $this->conexion = new PDO("mysql:host=".DB_HOSTMYSQL.";dbname=".DB_NAMEMYSQL, DB_USERMYSQL, DB_PASSWORDMYSQL);
        } catch (PDOException $exc) {
          echo $exc->getMessage();
        }
        break;
      case "pgsql":
        try {
          $this->conexion = new PDO("pgsql:dbname=".DB_NAMEPSSQL.";host=".DB_HOSTPSSQL, DB_USERPSSQL, DB_PASSWORDPSSQL);
        } catch (PDOException $exc) {
          echo $exc->getMessage();
        }
    }
  }

  public function getConexion() {
    return $this->conexion;
  }

  //put your code here
}
