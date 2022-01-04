<?php
/**
 * File Name: Shortcode Creation
 * 
 */

if( !shortcode_exists('customcss') ){
    add_shortcode( 'customcss', 'nevs_shortcodeCss');

    function nevs_shortcodeCss(){
        ob_start();
        echo '<style type="text/css">';
        echo get_post_meta(get_the_ID(), '__nevs_css', true);
        echo '</style>';
        return ob_get_clean();
    }
}





