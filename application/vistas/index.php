<!DOCTYPE html>
<html lang="en">
<head>
  <title>WiredPet</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/ico.ico">
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos\estilos.css"> 
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      margin-bottom: 0px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WiredPet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!--<ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
      </ul>-->
  
      <ul class="nav navbar-nav navbar-right">
        
        <li>
        <!--<a href="#"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myModal"></span> Inicia Sesion</a>-->

          <button type="button" class="btn btn-log btn-md" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myModal"></span> Inicia Sesion</button>
        </li>
      </ul>
    </div>
  </div>

  
</nav>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">Inicia sesion en WiredPet</h4>
        </div>
        <div class="modal-body">
            <form method="POST" action="../controladores/miCuenta/login.php">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="user" type="text" class="form-control" name="user" placeholder="Usuario">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>

    <br>
      <button type="submit"  class="btn btn-success btn-block" >Iniciar sesion</button>
    <br>
 
  </form>
        </div>
        <div class="modal-footer">
          <p>Si no tienes una cuenta registrate <a href="registro.php">aqui</a></p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal -->
  <br>
<div class="col-center container text-center">    
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 well">
      <div class="well">
        <h1 id="nombreLogo">WiredPet</h1>
        <img src="img/logo.png" class="img" id="" width="100%" height="100%" alt="">
                <a href="registro.php" role="button" class="btn btn-success btn-block " href="#">Crea Tu Cuenta</a>
                <br>
                <p>o utiliza una de estas opciones:</p>
                <br>
                <button type="button" class="btn btn-primary btn-block">Facebook</button>
                <button type="button" class="btn btn-danger btn-block">Google+</button>
                
        

</div>
</div>
</div>
</div>
<footer class=" text-center">
  <div class="caja-redes">
     <a href="https://twitter.com/" target="_blank" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
     <a href="https://facebook.com/" target="_blank" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
   <a href="https://pinterest.com/"  target="_blank" class="icon-button pinterest"><i class="icon-pinterest"></i><span></span></a>
  </div>
</footer>

</body>
</html>