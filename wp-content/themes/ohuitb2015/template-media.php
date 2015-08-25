<?php /* Template Name: Rumpun SeniBudaya */ get_header(); ?>
    <div class="wrapper-unit">

    <div class="mascot">
      <h1>Unit Keilmuan</h1>
    </div>

      <div class="container container-unit">

          <!-- Ubur ubur -->
          <div class="cloud cloud-1" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform:translateY(-400px)">
            <img src="<?php bloginfo('template_url');?>/images/cloud-1.png">  
          </div>
          
          <div class="cloud cloud-2" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform:translateY(-400px)">
            <img src="<?php bloginfo('template_url');?>/images/cloud-2.png">  
          </div>

          <?php
            global $post;
            $args = array( 'posts_per_page' => 75, 'category_name' => 'seni-budaya' );
            $posts = get_posts( $args );
            foreach( $posts as $post ): setup_postdata($post); 
          ?>

          <div class="unit">
            <div class="page-header">
              <h2 class="page-header_title text-left"><?php echo the_title(); ?></h2>
            </div>
            <div class="row">
              <div class="col-md-3 unit-img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="col-md-9">
                <?php echo the_content(); ?>
              </div>
            </div>
          </div>

          <?php
            endforeach; 
          ?>

      </div>

      <div class="organigram">
        
        <div class="organigram-bg" data-bottom-top="transform: translateY(0px);" data-top-bottom="transform: translateY(50px);">
        </div>
        <img src="<?php bloginfo('template_url');?>/images/footer-page.png">

      </div>

<?php get_footer(); ?>
