<?php
include_once '../../controladores/sessionControlador.php';
include_once $_SERVER['DOCUMENT_ROOT']."/ramen".'/configuracion/configuracionGeneral.php';
session_start();
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script type="text/javascript" src="../../js/jquery/jquery.js"></script>
    <script type="text/javascript" src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
    <title>Creacion de Productos</title>
  </head>
  <body>
    <form class="form-horizontal" action="../../controladores/productoControlador.php" method="post" target="envio">  
      <fieldset>  
        <legend>Creacion de Productos</legend>
        <table class="table table-hover">
          <tr>
            <td width="10%">Codigo: </td>
            <td width="90%">
              <input type="text" name="idCodigo" required>
            </td>
          </tr>
          <tr>
            <td width="10%">Descripcion: </td>
            <td width="90%">
              <input type="text" name="descripcion" required>
            </td>
          </tr>
        </table>
        <input type="submit" value="enviar" class="btn btn-primary">
      </fieldset>  
    </form>
    <?php 
    if($_SESSION['exito']!="") {
      ?>
    <div class="alert alert-danger">
      <?php
      echo $_SESSION['exito'];
      ?>
    </div>
    <?php
    $_SESSION['exito'] = "";
    }
    ?>
    
  </body>
</html>

