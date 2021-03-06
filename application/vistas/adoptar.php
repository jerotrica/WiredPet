<?php   include '../helper/sesion.php';?>

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
        <li ><a href="miCuenta.php">Noticias</a></li>
        <li ><a href="citas.php">Citas</a></li>
        <li class="active"><a href="adoptar.php">Adoptar</a></li>
        <li><a href="futuraMama.php">Futura Mama</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Configurar</a></li>
        <li><a href="../helper/sesionOut.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
      </ul>

    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <h2>Pasita</h2>
        <img src="img/pasita.jpg" id="imagen" class="img-rounded" height="165" width="165" alt="Avatar">
        <p>Macho</p>
        <p>Labrador</p>
        <p>Grande</p>
        
        
        
        <br><br>
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.5102862598146!2d-58.56770328514765!3d-34.641813767020956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7e57b8bd27d%3A0xa43c50d08458702!2sAv.+de+Mayo+100%2C+B1704BUO+Ramos+Mej%C3%ADa%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1493915644651" width="150" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br><br>

      </div>


                <br><br>
                <div class="bg-primary">

                    <h4>Pasita en la red</h4>

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
                    <label  for="comment">No abandones, pone en adopcion!</label>
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
        <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Filtra la busqueda de mascota" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filtrar por</label>
                                    <select class="form-control">
                                        <option value="0" selected>Zona Norte</option>
                                        <option value="1">Zona Sur</option>
                                        <option value="2">Zona Oeste</option>
                                        <option value="3">Capital Federal</option>
                                        <option value="4">Interior de Bs. As.</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Que contenga las palabras</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
      </div>


      <div class="row ">
        <div class="col-sm-3">
          <div class="well">
           <h4>Juancho</h4>
           <img src="img/bandmember.jpg" class="img-circle" height="85" width="85" alt="Avatar">

          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                <div class="row">
                  <div class="col-sm-3">
                      <h4>Ofrece</h4>
                  </div>
                  <div class="col-sm-5" align="left">
                      <h4><small>Labrador</small>  <small>macho</small>  <small>pequeño</small></h4>
                  </div>
                  <div class="col-sm-4 label label-info" align="left">
                      <h4>Zona Oeste</h4>
                  </div>
                </div>
               <p>Uno, dos o tres cachorros muy buenos.. .blablabla.... estan en la zona del Don Bosco Ramos Mejia</p>
               <div class="product-image"> 
                <div id="myCarousel-2" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="item active">
                    <img src="img/pasita3.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 2 -->
                  <div class="item">
                    <img src="img/pasita2.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 3 -->
                  <div class="item">
                    <img src="img/pasita1.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div>
              </div>
              <br>
              <button type="button" class="btn btn-success">Contactar</button>

          </div>
        </div>
      </div>


<div class="row ">
        <div class="col-sm-3">
          <div class="well">
           <h4>Juancho</h4>
           <img src="img/bandmember.jpg" class="img-circle" height="85" width="85" alt="Avatar">

          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                <div class="row">
                  <div class="col-sm-3">
                      <h4>Ofrece</h4>
                  </div>
                  <div class="col-sm-5" align="left">
                      <h4><small>Labrador</small>  <small>macho</small>  <small>pequeño</small></h4>
                  </div>
                  <div class="col-sm-4 label label-info" align="left">
                      <h4>Zona Oeste</h4>
                  </div>
                </div>
               <p>Uno, dos o tres cachorros muy buenos.. .blablabla.... estan en la zona del Don Bosco Ramos Mejia</p>
               <div class="product-image"> 
                <div id="myCarousel-2" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="item active">
                    <img src="img/pasita3.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 2 -->
                  <div class="item">
                    <img src="img/pasita2.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 3 -->
                  <div class="item">
                    <img src="img/pasita1.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div>
              </div>
              <br>
              <button type="button" class="btn btn-success">Contactar</button>

          </div>
        </div>
      </div>


      <div class="row ">
        <div class="col-sm-3">
          <div class="well">
           <h4>Juancho</h4>
           <img src="img/bandmember.jpg" class="img-circle" height="85" width="85" alt="Avatar">

          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                <div class="row">
                  <div class="col-sm-3">
                      <h4>Ofrece</h4>
                  </div>
                  <div class="col-sm-5" align="left">
                      <h4><small>Labrador</small>  <small>macho</small>  <small>pequeño</small></h4>
                  </div>
                  <div class="col-sm-4 label label-info" align="left">
                      <h4>Zona Oeste</h4>
                  </div>
                </div>
               <p>Uno, dos o tres cachorros muy buenos.. .blablabla.... estan en la zona del Don Bosco Ramos Mejia</p>
               <div class="product-image"> 
                <div id="myCarousel-2" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="item active">
                    <img src="img/pasita3.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 2 -->
                  <div class="item">
                    <img src="img/pasita2.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 3 -->
                  <div class="item">
                    <img src="img/pasita1.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div>
              </div>
              <br>
              <button type="button" class="btn btn-success">Contactar</button>

          </div>
        </div>
      </div>


      <div class="row ">
        <div class="col-sm-3">
          <div class="well">
           <h4>Juancho</h4>
           <img src="img/bandmember.jpg" class="img-circle" height="85" width="85" alt="Avatar">

          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                <div class="row">
                  <div class="col-sm-3">
                      <h4>Ofrece</h4>
                  </div>
                  <div class="col-sm-5" align="left">
                      <h4><small>Labrador</small>  <small>macho</small>  <small>pequeño</small></h4>
                  </div>
                  <div class="col-sm-4 label label-info" align="left">
                      <h4>Zona Oeste</h4>
                  </div>
                </div>
               <p>Uno, dos o tres cachorros muy buenos.. .blablabla.... estan en la zona del Don Bosco Ramos Mejia</p>
               <div class="product-image"> 
                <div id="myCarousel-2" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="item active">
                    <img src="img/pasita3.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 2 -->
                  <div class="item">
                    <img src="img/pasita2.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                  <!-- Slide 3 -->
                  <div class="item">
                    <img src="img/pasita1.jpg" class="img-rounded" width="100%" height="100%" alt="">
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div>
              </div>
              <br>
              <button type="button" class="btn btn-success">Contactar</button>

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