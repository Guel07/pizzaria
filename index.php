<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizza - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Monte<br><small>e Peça!</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php?link=1" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
	          <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
            <?php if(isset($_SESSION['usuarioLogado'])) { ?>
              <li class="nav-item"><a href="index.php?link=9" class="nav-link">Cadastro de Usuário</a></li>
              <li class="nav-item"><a href="index.php?link=5" class="nav-link">Área restrita</a></li>
              <li class="nav-item"><a href="index.php?link=10&acao=sair" class="nav-link">Sair</a></li>
              <?php }else{ ?>
            <li class="nav-item"><a href="index.php?link=11" class="nav-link">Login</a></li>
            <?php } ?>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <div class="">
        <?php 
          $link = @$_GET['link'];
          $pag[1]='principal.php';
          $pag[2]='sobre.php';
          $pag[3]='cadproduto.php';
          $pag[4]='produto.controller.php';
		      $pag[5]='areaRestrita.php';
          $pag[6]='produtoPizza2.php';
          $pag[7]='produtos.php';
          $pag[8]='carrinho.controller.php';
          $pag[9]='formCadUsuario.php';
          $pag[10]='usuario.controller.php';
          $pag[11]='formLoginUsuario.php';

          if(!empty($link)){
            if(file_exists($pag[$link])){
              include $pag[$link];
            }
          }else{
            trim(include 'principal.php');
          }
     ?>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>