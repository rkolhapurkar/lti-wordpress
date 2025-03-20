<?php 

function ExternalFiles()
{
    //Styles
    wp_enqueue_style('theme-style', get_template_directory_uri() . "/css/theme-styles.min.css");

    wp_enqueue_style('bootstrap-5-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
 
    wp_enqueue_style('swiper', "https://cdn.jsdelivr.net/npm/swiper@11.1.0/swiper-bundle.min.css");


    // SCRIPTS
    wp_enqueue_script('bootstrap-4-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", array('jquery'), rand(1000, 50000), true);

    wp_enqueue_script('Swiper', "https://cdn.jsdelivr.net/npm/swiper@11.1.0/swiper-bundle.min.js", array('jquery'), rand(1000, 50000), true);


    wp_enqueue_script('bootstrap-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", array('jquery'), rand(1000, 50000), true); 


    // Read More
    wp_enqueue_script('expander-js', get_template_directory_uri() . "/js/jquery.expander.min.js", array('jquery'), rand(1000, 50000), true);

    wp_enqueue_script('readmore-js', get_template_directory_uri() . "/js/readmore.min.js", array('jquery'), rand(1000, 50000), true);    
   
    wp_enqueue_script('theme-js-js', get_template_directory_uri() . "/js/theme_script.js", array('jquery'), rand(1000, 50000), true);
}

add_action('wp_enqueue_scripts', 'ExternalFiles');