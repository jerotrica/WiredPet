<?php   include '../helper/sesion.php';?>
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
      <a class="navbar-brand" href="miCuenta.php">WiredPet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="controlPanel.php"><span class="glyphicon glyphicon-cog"></span> Configurar</a></li>
        <li><a href="../helper/sesionOut.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<div class="col-center container text-center">   
<div class="col-sm-6 col-sm-offset-3 well">
<!--<div class="container-fluid">-->

  
    <h2 class="formcentrados">Agrega <small>una mascota </small></h2>
    
      <form  name="myForm" method="POST" action="../controladores/addMascota/proceso_addMascota.php" class="form-horizontal" enctype="multipart/form-data">
        <div class="row formcentrados ">
          

                <input name="nombre" ng-model="nombre" type="text" class="form-control" id="inlineFormInput" placeholder="Nombre"  required>
                <span ng-show="myForm.nombre.$touched && myForm.nombre.$invalid" id="danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Falta "Nombre"</span>
                <br>
                 <select class="form-control " id="sel1" name="tipo">
                      <option value="vacio">Especie</option>
                      <option value="perro">Perro</option>
                      <option value="gato">Gato</option>
                      <option value="roedor">Roedor</option>
                      <option value="pez">Pez</option>
                      <option value="otro">Otro</option>
                  </select>

                <br>
                <input name="raza" ng-model="raza" type="text" class="form-control" id="inlineFormInput" placeholder="Raza"  required>
                <br>
                <select class="form-control " id="sel1" name="sizePet">
                      <option value="vacio">Tamaño</option>
                      <option value="chico">Chico</option>
                      <option value="mediano">Mediano</option>
                      <option value="grande">Grande</option>
                  </select>
                
                
                <br>
          
                <select class="form-control " id="sel1" name="sexoPet">
                      <option value="vacio">Sexo</option>
                      <option value="Hembra">Hembra</option>
                      <option value="Macho">Macho</option>
                      
                  </select>
                
                
                <br>
                

                
                <button type="button" class="btn btn-default btn-md btn-block" data-toggle="collapse" data-target="#demo">
                <span class="glyphicon glyphicon-user"></span> Subir Foto De Perfil
              </button> 
                <div id="demo" class="collapse">
              <input type="file" id="upload" name="perfil">
              </div>
                <br>
               
          
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="enviar" id="enviar" >Enviar</button>
         </div>
      </form> <br>
   


</div></div>
    
    


   
<footer class=" text-center">
  <div class="caja-redes">
     <a href="https://twitter.com/" target="_blank" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
     <a href="https://facebook.com/" target="_blank" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
   <a href="https://pinterest.com/"  target="_blank" class="icon-button pinterest"><i class="icon-pinterest"></i><span></span></a>
  </div>
</footer>

</body>
</html>