<?php

	function theme_styles(){
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('animation_css', get_template_directory_uri() . '/css/animate.css');
		wp_enqueue_style('font_css', get_template_directory_uri() . '/css/fonts.css');
		wp_enqueue_style('easyzoom_css', get_template_directory_uri() . '/css/easyzoom.css');
		wp_enqueue_style('unit_css', get_template_directory_uri() . '/css/unit.css');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts', 'theme_styles');

	function theme_js(){
		global $wp_scripts;

		wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
		wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

		$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
		$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

		wp_enqueue_script('bootstrap_js',  get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('wow_js',  get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '', true);

		if ( !wp_is_mobile() ) {
			wp_enqueue_script('skrollr_js',  get_template_directory_uri() . '/js/skrollr.min.js', array('jquery'), '', true);
		}
		wp_enqueue_script('mousewheel_js',  get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array('jquery'), '', true);
		wp_enqueue_script('smoothscroll_js',  get_template_directory_uri() . '/js/jquery.simplr.smoothscroll.min.js', array('jquery'), '', true);
		wp_enqueue_script('easyzoom_js',  get_template_directory_uri() . '/js/easyzoom.js', array('jquery'), '', true);
		wp_enqueue_script('main_js',  get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
	}
	add_action('wp_enqueue_scripts', 'theme_js');

	//add_filter('show_admin_bar', '__return_false');

	add_theme_support('menus');
	add_theme_support('post-thumbnails');

	function register_theme_menus(){
		register_nav_menus(
			array(
				'header-menu' => _('Header Menu')
			)
		);
	}
	add_action('init',register_theme_menus);

	function create_widget( $name, $id, $description ) {
		register_sidebar(array(
			'name' => __( $name ),	 
			'id' => $id, 
			'description' => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}
	create_widget('Front Page Left', 'front-left', 'Display on the left of the homepage');

function paginate_category( $total_posts ) {
	$total_page = ($total_posts - 1)/6 + 1;
  for ( $i = 1; $i <= $total_page; $i++ ) {
    echo "<a class=\"page-numbers\" href=\"/news/page/" . $i . "\">" . $i . "</a>";
    echo "\n";
  }
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

?>