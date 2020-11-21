<?php
  include_once 'database.php';
  session_start();

  //Destruir la sesión OWASP 2
  if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
  }

  if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 1:
        header('location: admin.php'); //El admin solo puede ver página de admin
      break;

      case 2:
        header('location: user.php'); //Usuario solo puede ver la página de usuario
      break;

      default:
    }
  }

  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    $db = new Database();
    $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query ->fetch(PDO::FETCH_NUM);
    if($row==true){
        $rol = $row[3];
        $_SESSION['rol']= $rol;
        
        switch($_SESSION['rol']){
          case 1:
            header('location: admin.php'); // Se redirige a administrador
          break;
    
          case 2:
            header('location: user.php'); // Se redirige a la página del usuario
          break;
    
          default:
        }

    }else{

      echo "El usuario o contraseña son incorrectos"; // Alerta que los datos son incorrectos
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign In</title>
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
        <form action="login.php" style="border:1px solid transparent" method="POST">
            <div class="container">

            <?php if(!empty($message)): ?>
             <p> <?= $message ?></p>
            <?php endif; ?>
              <p>Sign in to you account.</p>
              <hr>
              <input type="text" placeholder="Ingrese usuario" name="username" required autocomplete="off"> <!-- Se quita autocompletado OWASP 3-->
          
              <label for="contraseña"><b>Contraseña</b></label>
              <input type="password" placeholder="Ingrese contraseña" name="password" required>
          
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
          
              <div class="clearfix">
               <a href="index.php"> <button type="button" class="cancelbtn">Cancel</button></a>
                <button type="submit" class="signupbtn">Sign In</button>
              </div>
            </div>
          </form>
      </div>
      
 <script src="assets/javascript/movil.js"></script>           
</body>
</html>