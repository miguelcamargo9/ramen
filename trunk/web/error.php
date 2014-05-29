<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="alert alert-danger">
      <?php
      echo $_SESSION['error'];
      ?>
    </div>
  </body>
</html>
<?php
session_destroy();
?>
