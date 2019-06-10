<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mestre Coruja</title>

  

  <link rel="shortcut icon" href="<?php echo base_url()?>public/template_user/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url()?>public/template_user/img/favicon.ico" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>public/template_user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>public/template_user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="<?php echo base_url();?>public/template_user/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>public/template_user/css/freelancer.min.css" rel="stylesheet">
  <?php 
      if (isset($estilo)) {
        foreach ($estilo as $estilo_nome) {
          $href = base_url() . "public/template_user/css/" .$estilo_nome; ?>
          <link href="<?=$href?>" rel="stylesheet" type="text/css">
       <?php 
         }
      }

   ?>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url();?>#page-top"><img src="<?php echo base_url()?>public/template_user/img/coruja_pequena.png" ></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url();?>#portfolio">Portifolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url();?>#about">Sobre</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url();?>#contact">Contato</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" id = "entrar" href="<?php echo base_url();?>restrict"><i class="fas fa-sign-in-alt"></i>&nbsp;Entrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

