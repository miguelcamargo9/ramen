<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuFacade
 *
 * @author Administrador
 */

namespace sesion;

include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/configuracion/configuracionGeneral.php';
include_once 'abstractFacade.php';
include_once BASE_PATH . '/persistencia/entidades/menus.php';

class menuFacade {

    private $em;

    function __construct() {
        $config = array("DB" => "mysql");
        $abstract = new \abstractFacade();
        $abstract->conectar($config);
        $this->em = $abstract->getEm();
    }

    public function menuPorId($id = "") {
//        error_reporting(-1);
        $menu = new \entidades\menus();
        $vQuerys = $menu->getSelect();
        $sentencia = $this->em->prepare("$vQuerys[1]");
        $sentencia->bindParam(':id', $id);
        $sentencia->execute();
        return $sentencia->fetch();
    }

}
