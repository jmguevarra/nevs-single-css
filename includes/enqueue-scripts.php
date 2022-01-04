<?php
/*
 * Enqueue All Scripts and Styling here
 * 
 */


/** Admin Scripts */
add_action('admin_enqueue_scripts', 'nevsEnqueueScripts');
function nevsEnqueueScripts(){

    //Css
    wp_enqueue_style('nevs-admin', plugins_url('nevs-single-css\src\assets\css\admin.css'), array(), PLUGIN_VERSION, 'all');

    //JS
    //wp_enqueue_script('movie-metaboxes-admin', plugins_url('jmdev-postmovies\src\assets\js\admin.js'), array('jquery'), PLUGIN_VERSION, true );
}