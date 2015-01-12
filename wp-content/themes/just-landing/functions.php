<?php
add_action( 'after_setup_theme', 'justlanding_setup' );
function justlanding_setup() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(166, 124, TRUE);
	global $content_width;
	if ( ! isset( $content_width ) )
	$content_width = 960;
	add_theme_support( 'automatic-feed-links' );
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


function justlanding_widgets() {
	register_sidebar(
		array(
		'name' => __( 'sidebar-header', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block1-user1', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
		register_sidebar(
		array(
		'name' => __( 'sidebar-block1-user2', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block1-user3', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block1-user4', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block2-user1', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block2-user2', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block2-user3', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block2-user4', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block3-user1', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block3-user2', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block3-user3', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block3-user4', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block4-user1', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block4-user2', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block4-user3', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block4-user4', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block5-user1', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block5-user2', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block5-user3', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
	register_sidebar(
		array(
		'name' => __( 'sidebar-block5-user4', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
		register_sidebar(
		array(
		'name' => __( 'sidebar-footer1', 'justlanding' ),
  		'description' => __( ' ', 'justlanding' ),
		)
	);
}
add_action( 'widgets_init', 'justlanding_widgets' );
function justlanding_frontend() {
 	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'justlanding_frontend' );
function justlanding_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'justlanding' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'justlanding_wp_title', 10, 2 );
function justlanding_menu() {
	add_theme_page('Just Landing Setup', 'Theme Options', 'edit_theme_options', 'justlanding', 'justlanding_menu_page');
}
add_action('admin_menu', 'justlanding_menu');
function justlanding_menu_page() {
echo '

<br>
	<center><h1>22 Sidebar for theme Just Landing</h1>
<br>
<img src="' . get_template_directory_uri() . '/images/just-landing-sidebar.png">
<h1><center>Documentation for <a href="http://justpx.com/jlpfree-documentation/" target="_blank">Just Landing free</a></center></h1><br><br>
<br><br><br>
Go to the section Pages, and click on Add New.<br>On the right side in the field Template choose a desired number of blocks, type in the page name page and save. <br><br>
<img src="' . get_template_directory_uri() . '/images/help1.jpg">
<br><br><br>
Go to Settings -> Reading and assign a static page.<br><br>
<img src="' . get_template_directory_uri() . '/images/help2.jpg">
<br><br><br>
<img src="' . get_template_directory_uri() . '/images/pro-free.png">
<br><br><br>
<h1><a href="http://justpx.com/just-lp-pro-wordpress">Just Landing PRO</a></h1></center>
';
}
function justlanding_menu2() {
	add_theme_page('Just Landing Setup', 'Premium Upgrade', 'edit_theme_options', 'justlandingpro', 'justlanding_menu_page2');
}
add_action('admin_menu', 'justlanding_menu2');
function justlanding_menu_page2() {
echo '
<br>
<center><h1>Theme Just Landing PRO</h1></ceter><br>
<center><img src="' . get_template_directory_uri() . '/images/pro-free.png"></center>
<br/><br/><br/>
<h1><center>Site <a href="http://justpx.com/product/just-landing-page-pro/" target="_blank">Just Landing PRO</a> - theme, demo, documentation.</center></h1><br><br>
<center><h1><font color="#dd3f56">10%</font> Discount - Code: <font color="#dd3f56">justpx10</font></h1></ceter>
<br/><br/><br/><br/>

<center><h1>Just Landing PRO</h1></ceter>
<br/><br/>
<center><img src="' . get_template_directory_uri() . '/images/just-landing-page-pro.jpg"></center>
<br/><br/>
	<center><h1>Just Landing PRO ( No backlink ) – 98 sidebar</h1></ceter>
<br/>
<center><img src="' . get_template_directory_uri() . '/images/just-landing-page-pro-sidebar.png"></center>
<br/><br/>
	<center><h1>Bonus! Theme Just Landing ( No backlink ) – 25 sidebar</h1></ceter>
<br/>
<center><img src="' . get_template_directory_uri() . '/images/just-landing-page-free-sidebar-no-backlink.png"></center>
<br/><br/>
';
}
?>