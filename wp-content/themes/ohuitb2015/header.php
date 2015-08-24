<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <div class="header">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#page-top">Start Bootstrap</a> -->
                <a href="<?php bloginfo( 'url' ) ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-nav.png" class="navbar-logo" alt="Logo OHU ITB 2015"></a>
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                      <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                      <a href="<?php bloginfo( 'url' ) ?>">Home</a>
                    </li>
                    <li class="page-scroll">
                      <a href="<?php bloginfo( 'url' ) ?>/news">News</a>
                    </li>
                </ul>
             </div>
             <!-- /.navbar-collapse -->
          </div>
      </nav> <!-- end of navigation --> 

      <!-- Gambar Maskot -->
