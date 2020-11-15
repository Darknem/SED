<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Clínica universitaria</title>
</head>
<body>
 
  <!--El header contiene barra de navegación, login rápido y botón para registrarse-->
<header class="header">
 <nav>
     <div class="topnav">
       <a href="index.php" class="actives"><img src="assets/images/logo2.png" alt="logo" class="logo"></a>

       <a href="#" class="hide-desktop options">
            <i class="fa fa-bars"></i>
            <i class="fa fa-times hide-mobile"></i>
        </a>
      <!--Esto se tiene que esconder con javascript-->
       <div class="hide-mobile menu" id="menu">
        <a href="index.php"><i class="fa fa-fw fa-home"></i>Inicio</a>
        <a href="#sobre"><i class="fa fa-fw fa-tag"></i>Servicios</a>
        <a href="ubicacion.php"><i class="fa fa-fw fa-map-marker"></i></i>Ubicación</a>
        <a href="Opiniones.php" ><i class="fa fa-fw fa-question"></i>Opiniones</a>
        
        <!--<a href="#contact"><i class="fa fa-fw fa-phone"></i>Contacto</a>-->
        
        <!--Contiene los botones para las cuentas-->
          <div class="login-container">         
              <a href="#iniciar" class="last"><button type="submit" ><i class="fa fa-fw fa-user"></i>Iniciar sesion</button></a> 
            <a href="#registrarse" class="last"><button type="submit" ><i class="fa fa-fw fa-user"></i>Registrarse</button></a> 
          </div>
       </div>
     </div>
 </nav>
</header> 


<section>
    <!-- Contenedor del carrusel -->
<div class="slideshow-container">

        <!-- Imágenes y textos que tendrán encima de ellas-->
        <div class="mySlides fade">
          <img src="assets/images/medicos.jpg" style="width:100%" alt="medicos">
          <div class="content">
            <h1>Servicios profesionales</h1>
            <p>Contamos con personal altamente calificado y con muchos años de experiencia.</p>
          </div>
        </div>
      
        <div class="mySlides fade">
          <img src="assets/images/medicos2.jpg" style="width:100%">
          <div class="content">
            <h1>Resultados confiables</h1>
            <p>Equipo médico de última generación para resultados más precisos y seguros.</p>
          </div>
        </div>
      
        <div class="mySlides fade">
          <img src="assets/images/medicos3.jpg" style="width:100%">
          <div class="content">
            <h1>Servicio 24/7</h1>
            <p>Atención médica 24 horas y 7 días a la semana.</p>
          </div>
        </div>
      
        <!-- Botones "siguiente" y "anterior" -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- Círculos -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
</section>


<!--Área de artículos-->
<section class="article-area">
  <div class="container post">
      <a name="sobre"><h2>Sobre nosotros</h2></a>
      <ul>
          <li>
              <article>
                  <img src="assets/images/articulo 1.jpg" alt="cooke banner">
                  <h3>Lorem, ipsum dolor.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, tempore! Velit quisquam
                      assumenda ea tempora, itaque neque suscipit! Voluptas, fugit!</p>
              </article>
          </li>
          <li>
              <article>
                  <img src="assets/images/articulo 3.jpg" alt="new banner">
                  <h3>Lorem, ipsum dolor.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quaerat vitae deleniti
                      inventore explicabo dolor laborum reiciendis fuga, libero quod.</p>
              </article>
          </li>
          <li>
              <article>
                  <img src="assets/images/articulo 4.jpg" alt="teach">
                  <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quod eum amet enim laborum
                      tenetur ullam consectetur illum natus dicta.</p>
              </article>
          </li>

          <li>
            <article>
                <img src="assets/images/articulo 4.jpg" alt="teach">
                <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quod eum amet enim laborum
                    tenetur ullam consectetur illum natus dicta.</p>
            </article>
        </li>

        <li>
          <article>
              <img src="assets/images/articulo 4.jpg" alt="teach">
              <h3>Lorem ipsum dolor sit amet consectetur.</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quod eum amet enim laborum
                  tenetur ullam consectetur illum natus dicta.</p>
          </article>
      </li>

      <li>
        <article>
            <img src="assets/images/articulo 4.jpg" alt="teach">
            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quod eum amet enim laborum
                tenetur ullam consectetur illum natus dicta.</p>
        </article>
    </li>
      </ul>
  </div>
</section>

<footer>
  <img src="assets/images/logo2.png" alt="logo" class="logo2">
  <p>Copyright 2019. All right reserved</p>
</footer>
 
<script src="assets/javascript/carrusel.js"></script>
<script src="assets/javascript/movil.js"></script>
</body>
</html>