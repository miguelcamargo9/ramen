<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <title>Ramen</title>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" action="controladores/loginControlador.php" method="POST">
        <h2 class="form-signin-heading"><center>Ramen</center></h2>
        <input type="text" class="form-control" placeholder="Usuario" name="nickname" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="pass" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>
    </div>
  </body>
</html>
