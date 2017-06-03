<?php   include '../helpers/sesion.php';?>

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
    }
  </style>
</head>



<body>

<nav class=" navbar navbar-inverse">
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
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Noticias</a></li>
        <li><a href="citas.php">Citas</a></li>
        <li><a href="adoptar.php">Adoptar</a></li>
        <li><a href="futuraMama.php">Futura Mama</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Configurar</a></li>
        <li><a href="../helpers/sesionOut.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
      </ul>

    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <h2>Firulais</h2>
        <img src="img/bird.jpg" id="imagen" class="img-rounded" height="165" width="165" alt="Avatar">
        <p>Macho</p>
        <p>Labrador</p>
        <p>Mediano</p>
        
        
        
        <br><br>
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.5102862598146!2d-58.56770328514765!3d-34.641813767020956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7e57b8bd27d%3A0xa43c50d08458702!2sAv.+de+Mayo+100%2C+B1704BUO+Ramos+Mej%C3%ADa%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1493915644651" width="150" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br><br>
        <span class="label label-primary">Seguir a Firulais</span>

      </div>


                <br><br>
                <div class="bg-primary">

                    <h4>Firulais en la red</h4>

                    <img src="img/barras.jpg" class="img-rounded" height="155" width="155" alt="Avatar">

                </div>


    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <!--<p contenteditable="true">Status: Feeling Blue</p>-->
              <form>
                  <div class="form-group">
                    <label  for="comment">Haz una publicacion</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                  </div>
              </form>
              <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-picture"></span> Subir Archivo
              </button>   
              <button type="button" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-edit"></span> Publicar
              </button> 
              </div>  
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bugs Bunny</p>
           <img src="img/conejo.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                <video  controls>
                    <source src="vid/mov_bbb.mp4" type="video/mp4">
                </video>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-3 ">
          <div class="well">
           <p>Juancho</p>
           <img src="img/bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9 ">
          <div class="well">
                <span class="glyphicon glyphicon-heart"></span>
               <p>Juancho hizo una cita con Princesa</p>
               <div>
                 
                <img src="img/bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                 <img src="img/corazon.png" class="img-circle" height="55" width="55" alt="Avatar">
                 <img src="img/princesa.jpg" class="img-circle" height="55" width="55" alt="Avatar">
               </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Mauricio</p>
           <img src="img/animal.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bestia</p>
           <img src="img/otroanimal.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <!--<div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>      -->
      <div class="well">
        <h1>ADS</h1>
      </div>
      <div class="well">
        <h1>ADS</h1>
      </div>
      <div class="well">
        <h1>ADS</h1>
      </div>
      <div class="well">
        <h1>ADS</h1>
      </div>
      <div class="well">
        <h1>ADS</h1>
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