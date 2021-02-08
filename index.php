<?php 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">    
</head><!--fin head-->
<body id="index">
<header>
<div class="container">
    <nav class="navbar navbar-expand-md navbar-light  m-2">
        <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-5">
            <li class="nav-item active">
              <a class="nav-link px-5 active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-5 " href="sobre-mi.php">Sobre mi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-5 " href="#">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-5 " href="contacto.php" aria-disabled="true">contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header><!--fin header-->
<main class="m-1 pt-1">
    <div class="container">
        <div class="row "><div class="col-12"><h1>Hola! <br> Bienvenidos a mi web</h1></div></div>
        <div class="row "><div class="col-12"><br></div></div>
        <div class="row py-2 "><div class="col-12 mx-5"><h3>Yo soy Pablo Abagnale</h3></div></div>
        <div class="row "><div class="col-12"><br></div></div>
        <div class="row">
            <div class="col-12 col-sm-8"><p>Te cuento la idea de hacer  este espacio es mostrar en un recorrido por los conocimientos que he ido adquiriendo de forma autodidacta de algunas herramientas como Visual Studio Code, HTML5, CSS3, Bootstrap, WordPress, PHP entre otras con el fin de algún día poder ser programador </p></div></div>
        <div class="row "><div class="col-12"><br></div></div> 
        <div class="row "><div class="col-12"><br></div></div> 
        <div class="row ">
        <div class="col-12 mx-5"><a href="sobre-mi.php"><button class="shadow">Conoce sobre mi</button></a></div></div> 
        <div class="row "><div class="col-12"><br></div></div>   
    </div> 
</main><!--fin main-->
<footer>
    <div class="container">
            <div class="row ">
                <div class="col-12 col-sm-3 text-center"><a href="https://pabloabagnale.wordpress.com/" target="_blank"><i class="fab fa-wordpress"></i></a> <a href="https://www.linkedin.com/in/pablo-ezequiel-abagnale/" target="_blank"><i class="fab fa-linkedin"></i></a> <a href="https://github.com/pablo-abagnale" target="_blank"><i class="fab fa-github"></i></a></div>
                <div class="col-12 col-sm-3 text-center pt-3"><a href="https://pabloabagnale.wordpress.com/contact/" target="_blank"><p class="mail">pablo.e.abagnale@gmai.com</p></a></div>
                <div class="col-12 col-sm-3"></div>
                <div class="col-12 col-sm-3 text-center"><a href="https://api.whatsapp.com/send?phone=543512294734"><i class="fab fa-whatsapp"></i></a></div>
            </div> 
        </div>   
</footer><!--fin footer-->
</body>
</html>