<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
    <title>Registrar Orden</title>
  </head>
  <body>
  <center>
    <form class="form-horizontal">
      <fieldset>

        <!-- Form Name -->
        <legend>Orden de Servicios</legend>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="textinput">Numero de Orden</label>
          <div class="controls">
            <input id="textinput" name="textinput" placeholder="Numero de Orden" class="input-xlarge" type="text" readonly required>
          </div>
        </div>
        <!-- Select Basic -->
        <div class="control-group">
          <label class="control-label" for="selectbasic">Cliente</label>
          <div class="controls">
            <select id="selectbasic" name="selectbasic" class="input-xlarge">
              <option>Option one</option>
              <option>Option two</option>
            </select>
          </div>
        </div>

        <!-- Button (Double) -->
        <div class="control-group">
          <label class="control-label" for="selectbasic"></label>
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