<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuariosFacade
 *
 * @author Sebastian Rojas
 */

namespace sesion;

include_once $_SERVER['DOCUMENT_ROOT'].'/ramen/configuracion/configuracionGeneral.php';
include_once 'abstractFacade.php';
include_once BASE_PATH.'/persistencia/entidades/usuarios.php';

use entidades\usuarios as usu;

class usuariosFacade {

  private $em;

  function __construct() {
    $config = array("DB"=>"mysql");
    $abstract = new \abstractFacade();
    $abstract->conectar($config);
    $this->em = $abstract->getEm();
  }

  public function query() {
    foreach ($this->em->query("SELECT * FROM usuarios") as $fila) {
      print_r($fila);
    }
  }

  public function validarUsuario($nickname = "", $pass = "") {
    $resultados = array();
    $usuariosDao = new usu();
    $vQuerys = $usuariosDao->getSelectPreparate();
    $sentencia = $this->em->prepare("$vQuerys[2]");
    $sentencia->bindParam(':nickname', $nickname);
    $sentencia->execute();
    $vUsuarios = $sentencia->fetch();
    if (!is_null($vUsuarios)) {
      if ($vUsuarios['password'] == md5($pass)) {
        $resultados["ingreso"] = $bandera = true;
        $resultados["datos"] = $vUsuarios;
      } else {
        $resultados["ingreso"] = $bandera = false;
        $resultados["error"] = "contraseña erronea";
      }
    } else {
      $resultados["ingreso"] = $bandera = false;
      $resultados["error"] = "El usuario no existe";
    }

    return $resultados;
  }

  public function infoUser($id = "") {
    $resultados = array();
    $usuariosDao = new usu();
    $vQuerys = $usuariosDao->getSelectPreparate();
    $sentencia = $this->em->prepare("$vQuerys[1]");
    $sentencia->bindParam(':id', $id);
    $sentencia->execute();
    $vUsuarios = $sentencia->fetch();
    if (!is_null($vUsuarios)) {
      $resultados["existe"] = true;
      $resultados["datos"] = $vUsuarios;
    } else {
      $resultados["existe"] = FALSE;
    }
    return $resultados;
  }

  public function actualizarIdSession($id = "", $id_session = "") {
    $resultados = array();
    $usuariosDao = new usu();
    $vQuerys = $usuariosDao->getUpdate();
    $sentencia = $this->em->prepare("$vQuerys[0]");
    $sentencia->bindParam(':id_session', $id_session);
    $sentencia->bindParam(':id', $id);
    $sentencia->execute();
  }

}
