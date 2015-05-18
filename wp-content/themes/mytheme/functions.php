<?php

function learningWordPress_resources() { // Create function for register css file
	
	wp_enqueue_style('style', get_stylesheet_uri()); // register css file
        
        wp_enqueue_style('bootstrap.css', get_template_directory_uri().'/css/bootstrap.css');
        wp_enqueue_style('bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.css');
        
        wp_enqueue_style('jquery.fullPage', get_template_directory_uri().'/css/jquery.fullPage.css');
        
        
        
        wp_enqueue_script( 'jquery-1.11.3.min', get_template_directory_uri() . '/js/jquery-1.11.3.min.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js' ); 
        wp_enqueue_script( 'jquery.easings', get_template_directory_uri() . '/js/jquery.easings.min.js' ); 
        wp_enqueue_script( 'jquery.fullPage', get_template_directory_uri() . '/js/jquery.fullPage.js'); 
        wp_enqueue_script( 'jquery.easings', get_template_directory_uri() . '/js/jquery.slimscroll.js'); 
        
        

}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');// register function to default runing