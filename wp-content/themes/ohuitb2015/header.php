<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico?v=2">

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
                      <a href="<?php bloginfo( 'url' );?>/news">News</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Unit <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php bloginfo( 'url' );?>/rumpun-agama">Rumpun Agama</a></li>
                        <li><a href="<?php bloginfo( 'url' );?>/rumpun-media">Rumpun Media</a></li>
                        <li><a href="<?php bloginfo( 'url' );?>/rumpun-seni-budaya">Rumpun Seni Budaya</a></li>
                        <li><a href="<?php bloginfo( 'url' );?>/rumpun-olahraga">Rumpun Olahraga</a></li>
                        <li><a href="<?php bloginfo( 'url' );?>/rumpun-keilmuan">Rumpun Pendidikan</a></li>
                        <li><a href="<?php bloginfo( 'url' );?>/rumpun-kajian">Rumpun Kajian</a></li>
                      </ul>
                    </li>
                    <li class="page-scroll">
                      <a href="#" data-toggle="modal" data-target="#myModal">Sponsor & Media</a>
                    </li>
                </ul>
             </div>
             <!-- /.navbar-collapse -->
          </div>
      </nav> <!-- end of navigation --> 

      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Sponsored By</h3>
            </div>
            <div class="modal-body sponsor-medpar">
                  <div class="row">
                    <div class="col-xs-12">
                      <img src="<?php bloginfo('template_url') ?>/images/dauky.png" class="big-logo">
                      <br>
                      <img src="<?php bloginfo('template_url') ?>/images/sponsor/elzatta.png" class="medium-logo">
                      <img src="<?php bloginfo('template_url') ?>/images/sponsor/wardah-cosmetics.jpg" class="medium-logo">
                      <img src="<?php bloginfo('template_url') ?>/images/sponsor/oppo.png" class="medium-logo">
                      <br>
                      <img src="<?php bloginfo('template_url') ?>/images/sponsor/warpas.jpg" class="small-logo">
                      <img src="<?php bloginfo('template_url') ?>/images/sponsor/logotbiasli.png" class="small-logo">
                    </div>
                  </div>
            </div>

            <div class="modal-header">
              <h3 class="modal-title">Media Partner</h3>
            </div>
            <div class="modal-body sponsor-medpar">
                  <div class="row">
                    <div class="col-xs-12">
                    <!-- Isi Sponsor -->
                    </div>
                  </div>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <!-- End of Modal -->
