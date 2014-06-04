<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../modelos/productosModelo.php';
$prodModelo = new \modelos\productosModelo();
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      
      function aumentarIndice(xNombre){
        xNombre = "cantidad_"+xNombre;
        document.forms.ordenServiciosForm[xNombre].disabled = false;
      }
      
      function calcularTotal(masValue){
        document.forms.ordenServiciosForm['totalProductos'].value = parseInt(document.forms.ordenServiciosForm['totalProductos'].value) + 1;
      }
    </script>
    <title>Registrar Orden</title>
  </head>
  <body>
  <center>
    <form class="form-group" name="ordenServiciosForm" method="POST" action="../controladores/facturaControlador.php">
      <fieldset>

        <!-- Form Name -->
        <legend>Orden de Servicios</legend>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="textinput">Cliente</label>
          <div class="controls">
            <input id="textinput" name="cliente" placeholder="Cliente" class="input-xlarge" type="text" required>
          </div>
        </div>

        <!-- Button (Double) -->
        <div class="control-group">
          <label class="control-label">Productos</label>
          <div class="controls">
            <table align="center">
              <?php
              echo $prodModelo->crearListaProductos();
              ?>
            </table>
          </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="textinput">Total Productos</label>
          <div class="controls">
            <input id="textinput" name="totalProductos" placeholder="Total Productos" class="input-xlarge" type="text" value="0" readonly required>
            <input name="totalItems" type="hidden" value="0">
          </div>
        </div>

        <!-- Check -->
        <div class="control-group">
          <label class="control-label" ></label>
          <div class="controls">
            <button id="button1id" name="button1id" class="btn btn-success">Guardar</button>
            <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
      </fieldset>
    </form>
  </center>
</body>
</html>