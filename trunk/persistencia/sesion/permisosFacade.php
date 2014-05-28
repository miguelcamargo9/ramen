<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of permisosFacade
 *
 * @author Administrador
 */

namespace sesion;

include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/configuracion/configuracionGeneral.php';
include_once 'abstractFacade.php';
include_once BASE_PATH . '/persistencia/entidades/permisos.php';

class permisosFacade {

    //put your code here
    private $em;

    function __construct() {
        $config = array("DB" => "mysql");
        $abstract = new \abstractFacade();
        $abstract->conectar($config);
        $this->em = $abstract->getEm();
    }

    public function permisosPorId($idPerfil = "") {
        $permisosDao = new \entidades\permisos();
        $vQuerys = $permisosDao->getSelect();
        $sentencia = $this->em->prepare("$vQuerys[1]");
        $sentencia->bindParam(':idPerfil', $idPerfil);
        $sentencia->execute();
        $mPermisos = $sentencia->fetchAll();
        return $mPermisos;
    }

}
