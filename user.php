<?php include('db.php'); 

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != 2){
    header('location: login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>El Banco</title>
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
        <a href="#sobre"><i class="fa fa-fw fa-tag"></i>Servicios</a>
        <a href="ubicacion.php"><i class="fa fa-fw fa-map-marker"></i></i>Ubicación</a>
        <a href="Opiniones.php" ><i class="fa fa-fw fa-question"></i>Opiniones</a>
        
        <!--<a href="#contact"><i class="fa fa-fw fa-phone"></i>Contacto</a>-->
        
        <!--Contiene los botones para las cuentas-->
          
       </div>
     </div>
 </nav>
</header>

<h1>Bienvenido, usuario</h1>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Título" autofocus autocomplete="off" disabled="disabled">
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Descripción" autocomplete="off" disabled="disabled"></textarea>
          </div>
          
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Titular</th>
            <th>Número de tarjeta</th>
            <th>Fecha de creación</th>
            
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM opinion";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created']; ?></td>
            <td>
              
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
