<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of permisos
 *
 * @author open12
 */

namespace entidades;

define("selectPermisos", "SELECT * from permisos ");
define("selectIdPerfil", "SELECT * from permisos WHERE idPerfil =:idPerfil ");

class permisos {

    //put your code here
    private $select;

    function __construct() {
        $this->select = array(selectPermisos, selectIdPerfil);
    }

    public function getSelect() {
        return $this->select;
    }

}
