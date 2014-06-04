<?php

namespace controladores;
require_once '../../persistencia/sesion/facturasFacade.php';
use sesion\facturasFacade as factura;
$facade = new factura();
$idFactura = $facade->guardarFactura($_POST['cliente'], $_POST['totalProductos']);
for ($index = 0;$index < count($_POST);$index++) {
  if($_POST['productos'.$index] != ''){
    $idFacturaPro = $facade->guardarFacturaProducto($idFactura, $_POST['productos'.$index], $_POST['cantidad_'.$_POST['productos'.$index]]);
  }
}

//$_SESSION['exito'] = "Producto guardado con exito";
//header("../vistas/inventario/crearProducto.php");
?>
