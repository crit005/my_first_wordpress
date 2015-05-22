<?php
require_once 'wp_bootstrap_navwalker.php';
function learningWordPress_resources() { // Create function for register css file	
	       
        wp_enqueue_style('bootstrap.css', get_template_directory_uri().'/css/bootstrap.css');
        wp_enqueue_style('bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.css'); 
        
        wp_enqueue_style('jquery.fullPage', get_template_directory_uri().'/css/jquery.fullPage.css');
        
        wp_enqueue_style('jquery.mCustomScrollbar', get_template_directory_uri().'/css/jquery.mCustomScrollbar.css');
        
        wp_enqueue_style('style', get_stylesheet_uri()); // register css file 
        wp_enqueue_style('lg', get_template_directory_uri().'/css/lg.css'); // register css file 
        wp_enqueue_style('md', get_template_directory_uri().'/css/md.css'); // register css file 
        wp_enqueue_style('sm', get_template_directory_uri().'/css/sm.css'); // register css file 
        wp_enqueue_style('xs', get_template_directory_uri().'/css/xs.css'); // register css file 
        
        wp_enqueue_script( 'jquery-1.11.3.min', get_template_directory_uri() . '/js/jquery-1.11.3.min.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js' ); 
        wp_enqueue_script( 'jquery.easings', get_template_directory_uri() . '/js/jquery.easings.min.js' ); 
        wp_enqueue_script( 'jquery.fullPage', get_template_directory_uri() . '/js/jquery.fullPage.js'); 
        wp_enqueue_script( 'jquery.easings', get_template_directory_uri() . '/js/jquery.slimscroll.js'); 
        wp_enqueue_script( 'jquery.mCustomScrollbar.concat.min', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js');
        
        

}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');// register function to default runing

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	//'footer' => __( 'Footer Menu'),
));

// End Navigation Menu

/*Get post by slugname*/
/*====================*/
function get_post_by_slugname($name,$type){

$post_slug = $name;
$args=array(
  'name' => $post_slug,
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => 1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {  
  while ($my_query->have_posts()) : $my_query->the_post();    
  ?>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <p>
        <?php the_content();?>
    </p>
    
<?php  
  endwhile;
}else{
    echo ('<p> Page request not found </p>');
}
wp_reset_query();  // Restore global post data stomped by the_post().

}
