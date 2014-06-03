<?php
namespace controladores;
require_once '../../persistencia/sesion/productosFacade.php';
use sesion\productosFacade as produfa;
$facade = new produfa();
$facade->guardarProducto($_POST['idCodigo'], $_POST['descripcion']);
$_SESSION['exito'] = "Producto guardado con exito";
header("../vistas/inventario/crearProducto.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

