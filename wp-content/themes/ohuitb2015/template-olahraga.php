<?php /* Template Name: Rumpun Olahraga */ get_header(); ?>
    <div class="wrapper-unit">

    <div class="mascot">

      <img src="<?php bloginfo('template_url'); ?>/images/unit-olahraga.png">
      Unit Olahraga
    </div>

      <div class="container-unit">

          <!-- Ubur ubur -->
          <div class="cloud cloud-1" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform:translateY(-400px)">
            <img src="<?php bloginfo('template_url');?>/images/cloud-1.png">  
          </div>
          
          <div class="cloud cloud-2" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform:translateY(-400px)">
            <img src="<?php bloginfo('template_url');?>/images/cloud-2.png">  
          </div>

          <?php
            global $post;
            $args = array( 'category_name' => 'olahraga' );
            $posts = get_posts( $args );
            foreach( $posts as $post ): setup_postdata($post); 
          ?>

          <div class="unit">
            <div class="unit-name">
              <?php echo the_title(); ?>
            </div>
            <div class="row">
              <div class="col-md-3">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="col-md-9">
                <?php echo the_excerpt(); ?>
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