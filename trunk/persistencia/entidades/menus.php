<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menus
 *
 * @author open12
 */

namespace entidades;

define("selectMenus", "SELECT * from menus ");
define("selectIdMenu", "SELECT * from menus where id = :id ");

class menus {

    private $select;

    function __construct() {
        $this->select = array(selectMenus, selectIdMenu);
    }

    public function getSelect() {
        return $this->select;
    }

//put your code here
}
