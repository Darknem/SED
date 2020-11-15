<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign up</title>
</head>
<body>
   <!--El header contiene barra de navegación, login rápido y botón para registrarse-->

   <header class="header">
    <nav>
        <div class="topnav">
          <a href="index.php" class="actives"><img src="assets/images/banco.png" alt="logo" class="logo"></a>
   
          <a href="#" class="hide-desktop options">
               <i class="fa fa-bars"></i>
               <i class="fa fa-times hide-mobile"></i>
           </a>
         <!--Esto se tiene que esconder con javascript-->
          <div class="hide-mobile menu" id="menu">
           <a href="index.php"><i class="fa fa-fw fa-home"></i>Inicio</a>
           <a href="index.php"><i class="fa fa-fw fa-question"></i>¿Quiénes somos?</a>
           <a href="#services"><i class="fa fa-fw fa-tag"></i>Servicios</a>
           <!--<a href="#contact"><i class="fa fa-fw fa-phone"></i>Contacto</a>-->
           <a href="ubicacion.html"><i class="fa fa-fw fa-map-marker"></i></i>Ubicación</a>
           <!--Contiene los botones para las cuentas-->

          </div>
        </div>
    </nav>
   </header> 
<body>
    <div class="bg-img">
        <form action="login.php" style="border:1px solid transparent" method="post">
            <div class="container">

            <?php if(!empty($message)): ?>
             <p> <?= $message ?></p>
            <?php endif; ?>
              <h1>Sign In</h1>
              <p>Sign in to you account.</p>
              <hr>
          
              <label for="usuario"><b>Usuario</b></label>
              <input type="text" placeholder="Ingrese usuario" name="usuario" required>
          
              <label for="contraseña"><b>Contraseña</b></label>
              <input type="password" placeholder="Ingrese contraseña" name="contrasena" required>
          
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
          
              <div class="clearfix">
               <a href="index.php"> <button type="button" class="cancelbtn">Cancel</button></a>
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            </div>
          </form>
      </div>
      
 <script src="assets/javascript/movil.js"></script>           
</body>
</html>