<?php

namespace modelos;

include_once $_SERVER['DOCUMENT_ROOT'] . '/ramen/configuracion/configuracionGeneral.php';
require_once BASE_PATH . '/persistencia/sesion/productosFacade.php';

class productosModelo {

  public function crearListaProductos() {
    $proFac = new \sesion\productosFacade();
    $mProductos = $proFac->productos();
    $i = 0;
    foreach ($mProductos as $mProducto) {
      
      $sProducto .= "<tr> 
                      <td align='center'>
                        <input name='productos$i' id='checkboxes-0' value='{$mProducto['id']}' type='checkbox' onclick='aumentarIndice(\"{$mProducto['id']}\")'>
                      </td>
                      <td>
                        {$mProducto['descripcion']}
                      </td>
                      <td align='center'>
                        <input name='cantidad_{$mProducto['id']}' id='textinput' style='width: 20%' onChange='calcularTotal(this.value)' type='number' value='0' min='0' disabled>
                      </td>
                    </tr>";
                        $i++;
    }
    return $sProducto;
  }
}

?>
