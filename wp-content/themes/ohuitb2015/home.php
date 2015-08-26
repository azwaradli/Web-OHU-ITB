<?php get_header(); ?>
  
  <div class="wrapper">
    
    <div class="container">
            
      <div class="page-header">
        <h1 class="page-header_title">Berita Terkini</h1>
      </div>

      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type'       => 'post',
          'posts_per_page'  => 6,
          'category_name'   => 'berita',
          'paged'           => $paged
        );

        $the_query = new WP_Query( $args ); 

      ?>
               
      <div class="row">

        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          
          <div class="col-md-4">
            <div class="news-image">
              <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
              else {
                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/post-image-placeholder.png">';
              }
              ?>

            </div>

            <div class="news-header"> 
              <p class="news-date"><?php echo the_time('j F Y'); ?></p>
              <h2 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            
          </div>
        
          <?php if ( ($the_query->current_post + 1) % 3 == 0 ): ?>
            </div>
            
            <div class="row">
          <?php endif; ?>
                
        <?php endwhile; endif; ?> 

        </div>
        <div class="pagination">
          <?php echo paginate_links( ); ?>
        </div>

      </div>

      <div class="organigram">
        <img src="<?php bloginfo('template_url');?>/images/footer-page.png">
        <div class="footer-image-small">
          <img src="<?php bloginfo('template_url');?>/images/footer-bg-small.png">
        </div>
      </div>
    
    </div>


    <?php get_footer(); ?>