<?php

/*$enlace = new mysqli('localhost', 'root','',  'app');//'app' nombre de la bd

    if ($enlace->connect_errno) {
        printf("Connect failed: %s\n", $enlace->connect_error);
        exit();
    }

  if (isset($_POST["bt_entrar"])) {


        $l=(object)$_POST;
        
        if ($usuario = $enlace->query( "SELECT * FROM registro WHERE nombre_usu='$l->usuario' AND contrasena= '$l->contrasena'" )) {
             while ($persona = $usuario->fetch_object()) {
                echo "Dentro";
                //print_r($persona);
                $_SESSION['logueado'] = true;
                $_SESSION['nombre'] = $persona->nombre; 
                //print_r($_SESSION);
                if ($_SESSION['logueado'] == true) {
                    "<form action='Perfil.php¿ method='post'> 
                    <br><input type='submit' value='Entrar' name='bt_entrar' >
                 </form>";
                }
                header('Location: Perfil.php');
                exit();
            }
                       
        }else {
            echo"Errormessage: %s\n", $enlace->error;
            
        }
    }*/

?>
  <html>
<head>
<meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilo/estilossregistro.css">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="main.js"></script>
    <script src="ir-arriba.js"></script>
</head>
<body>

 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Registro</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item mx-0 mx-lg-1">

              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php"> Inicio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Iniciar_sesion.php">Iniciar sesión</a>
            </li>
           
           
          </ul>
        </div>
      </div>
    </nav>
        <br>
        <br>
<br>
        <br>



        <div class="container">
      <div class="container">

            <div class="row">
          <div class="col-lg-7 mx-auto">
          <br>
 <h2 class="text-center text-uppercase text-secondary mb-0"><p class="text-default"><em>REGISTRO</em></p></h2>

        <form action="Registreo.php" method="post" class="form-register" novalidate="novalidate">
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-0">
                  <label> Nombre</label>
             <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Nombre"  required>
                    <p class="help-block text-danger"></p>               
                </div>
              </div>           

                 <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-0">
                  <label>Apellido</label>
             <input class="form-control" id="apellido" type="text" name="apellido" placeholder="Apellido"  required>
                    <p class="help-block text-danger"></p>               
                </div>
              </div>     

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-0">
                  <label>Usuario</label>
             <input class="form-control" id="nombre_usu" type="text" name="nombre_usu" placeholder="Usuario"  required>
                    <p class="help-block text-danger"></p>               
                </div>
              </div>    


               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-0">
                  <label>contraseña</label>
             <input class="form-control" id="contrasena" type="password" name="contrasena" placeholder="Contrasena"  required>
                    <p class="help-block text-danger"></p>               
                </div>
              </div>    

             

 <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-0">
                  <label>Telefono</label>
             <input class="form-control" id="telefono" type="number" name="telefono" placeholder="Telefono"  required>
                    <p class="help-block text-danger"></p>               
                </div>
              </div> 

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-0">
                  <label>Email</label>
             <input class="form-control" id="email" type="varchar" name="email" placeholder="Email"  required>
                    <p class="help-block text-danger"></p>               
                </div>
              </div> 
            
            
              
            
            
            
                <br>
              <div id="success"></div>
              <div class="form-group">

 <center><button type="submit" value="Guardar" name="bt_guardar" class="btn btn-info btn-xl" id="sendMessageButton" required >Registrar</button></center>
 </div>
            </form>
          </div>
        </div>
      </div>
      </div>

   
<?php

/**/$enlace = new mysqli('localhost', 'root','',  'diaro');//'app' nombre de la bd

    if ($enlace->connect_errno) {
        printf("Connect failed: %s\n", $enlace->connect_error);
        exit();
    }


  if (isset($_POST["bt_guardar"])) {
        $r =(object)$_POST;
        //insertar
        $campos = "nombre, apellido, nombre_usu, contrasena, telefono, email"; //son los valores que esan en bd
        $valores = "'$r->nombre','$r->apellido','$r->nombre_usu', '$r->contrasena','$r->telefono', '$r->email'"  ; 

        if (!$enlace->query( "INSERT INTO   registro ($campos) values ($valores)" )) {
            
            
            echo"Errormessage: %s\n", $enlace->error;    
            
            
        }else{ 
      echo '<script language="javascript">alert("Registro exitoso");</script>'; 

        }
    }

?>
  

   <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Ubicación</h4>
            <p class="lead mb-0">PROGRAMACIÓN WEB
              <br>Carrera 6 No. 76-103, </p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Información del sitio Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Realizadores</h4>
            <p class="lead mb-0">    


            </p>
          </div>
        </div>
      </div>
    </footer>
     <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>




</div>
</body>
</html>