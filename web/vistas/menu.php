<?php
session_start();
include_once '../modelos/sessionModelo.php';
include_once '../controladores/sessionControlador.php';
//echo "hola: ".$_SESSION['nombre']." con el id de session: ".$_SESSION['session_id'];
?>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramen - Bienvenido <?php echo $_SESSION['nombre']; ?> </title>
    <link href="../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../fuentes/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery/jquery.js"></script>
    <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script type="text/javascript">
      $(function() {
        $('#side-menu').metisMenu();
      });
      $(window).unload(function() {
        $.ajax({
          url: '../controladores/salirControlador.php',
          type: "POST",
          dataType: "json",
          data: {id: "<?php echo $_SESSION['id']; ?>"}
        });
      });
      function f_salir() {
        $.ajax({
          url: '../controladores/salirControlador.php',
          type: "POST",
          dataType: "json",
          data: {id: "<?php echo $_SESSION['id']; ?>"}
        });
        window.location = "http://127.0.0.1/ramen";
      }

      function f_link(enlace) {
        var frame = $("#contenido");
        frame.attr("src", enlace);
      }
    </script>
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Ramen v1.0</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
          <!-- /.dropdown -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a onclick="f_salir()"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
              </li>
            </ul>
            <!-- /.dropdown-user -->
          </li>
          <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default navbar-static-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
              <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Configuracion<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a onclick="f_link('opcionPrueba.php')">Opcion Prueba</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
            </ul>
            <!-- /#side-menu -->
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>
      <div id="page-wrapper">
        <iframe id="contenido" width="100%" height="98%" frameBorder="0" scrolling="no">
        </iframe>
      </div>
    </div>
  </body>
</html>
