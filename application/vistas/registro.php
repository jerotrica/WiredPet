<!DOCTYPE html>
<html lang="es">
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
  <link rel="stylesheet" type="text/css" href="estilos\estilos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css"/>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="js/funcion.js" language="javascript" type="text/javascript"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

    
    
        
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
<body ng-app="">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">WiredPet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">  
      <ul class="nav navbar-nav navbar-right">
        <li>      
          <button type="button" class="btn btn-log btn-md" data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myModal"></span>
          Inicia Sesion</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
<div class="col-center container text-center">   
<div class="col-sm-6 col-sm-offset-3 well">
<!--<div class="container-fluid">-->

  
    <h2 class="formcentrados">Registrate <small>para comenzar </small></h2>
    
      <form  name="myForm" method="POST" action="../controladores/registro/proceso_registro.php" class="form-horizontal">
        <div class="row formcentrados ">
          

                <input name="nombre" ng-model="nombre" type="text" class="form-control" id="inlineFormInput" placeholder="Nombre"  required>
                <span ng-show="myForm.nombre.$touched && myForm.nombre.$invalid" id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Falta "Nombre"</span>
                <br>
                <input name="apellido" ng-model="apellido"  type="text" class="form-control" id="inlineFormInput" placeholder="Apellido" required>
                <span ng-show="myForm.apellido.$touched && myForm.apellido.$invalid" id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Falta "Apellido"</span>

                <br>

                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">@</div>
                <input name="usuario" ng-model="usuario" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nombre de Usuario" required>
                </div>
                <span ng-show="myForm.usuario.$touched && myForm.usuario.$invalid"id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span> Falta "Nombre de Usuario"</span>
                <br>
                <input name="clave" ng-model="clave" type="password" class="form-control" id="inlineFormInputGroup" placeholder="Clave" required>
                
                <span ng-show="myForm.clave.$touched && myForm.clave.$invalid"id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span> Falta "Clave"</span>
          
                <br>
                <input name="fecha" ng-model="fecha" type="text" id="fecha" name="fecha" class="form-control" placeholder="Fecha de Nacimiento" required >
                <span ng-show="myForm.fecha.$touched && myForm.fecha.$invalid"id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span> Falta "Fecha Nacimiento"</span>

                <br>
                <input name="telefono" ng-model="telefono" type="tel" class="form-control" id="inlineFormInput" placeholder="Telefono"  required>
                <span ng-show="myForm.telefono.$touched && myForm.telefono.$invalid" id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Falta "Telefono"</span>
                <br>
                <input name="domicilio" ng-model="domicilio" type="text" class="form-control" id="inlineFormInput" placeholder="Domicilio"  required>
                <span ng-show="myForm.domicilio.$touched && myForm.domicilio.$invalid" id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Falta "Domicilio"</span>
                <br>
                <input name="mail" ng-model="mail" type="email" class="form-control" id="inlineFormInput" placeholder="Mail"  required>
                <span ng-show="myForm.mail.$touched && myForm.mail.$invalid" id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Falta "Mail"</span>

                
                <br>
                  
                  <select class="form-control " id="sel1" name="sexo">
                      <option value="vacio">Sexo</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                  </select><span ng-show="myForm.sexo.$touched && myForm.sexo.$invalid" id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Falta "Mail"</span>
                
          
                <br>
          
                <!--<button type="submit" class="btn btn-success">Añadir Mascota</button>
                <button type="miCuenta.HTML" action="miCuenta.HTML" class="btn btn-info">Quiero Adoptar</button>-->
          
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="enviar" id="enviar" >Enviar</button>
         
      </form> <br>
   


</div></div></div>
    
    
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

   
<footer class=" text-center">
  <div class="caja-redes">
     <a href="https://twitter.com/" target="_blank" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
     <a href="https://facebook.com/" target="_blank" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
   <a href="https://pinterest.com/"  target="_blank" class="icon-button pinterest"><i class="icon-pinterest"></i><span></span></a>
  </div>
</footer>

</body>
</html>