<?php
/*
 *
 *  FileName: Metabox Snippets
 *  Desc: all code for single metabox in post and page are place here. 
 * 
 */ 

add_action('add_meta_boxes', 'nevsCssMetabox');
function nevsCssMetabox(){
    $screen = array('post', 'page');
    add_meta_box(
        '_nevs_single_css',
        'Custom Css for this post',
        'nevsCssField',
        $screen,
        'normal',
        'default'
    );
}

/** Page Field Block*/
function nevsCssField($post){

    $singleStyling = get_post_meta( $post->ID, '__nevs_css', true);
    wp_nonce_field('_nevs_css_nonce_field', '_nevs_css_nonce'); 
    
    ?>
    <div id="nevs_css_metabox">
        <div class="fields">
            <div class="field single-line-field">
                <textarea class="single text" id="nevs-css-textarea" name="nevs-css-textarea" placeholder="Pleace here your custom css"><?= htmlspecialchars_decode($singleStyling); ?></textarea>
            </div>
        </div>
    </div>

    <?php
}



//** Save Post */
add_action('save_post', 'nevsSaveField', 10, 2);
function nevsSaveField($post_id, $post){

    //Check capabiltity
    $editCap = get_post_type_object( $post->post_type )->cap->edit_post;
    if( !current_user_can( $editCap, $post_id ) ){ return; }

    //check nonce validity
    if( !isset($_POST['_nevs_css_nonce']) || !wp_verify_nonce($_POST['_nevs_css_nonce'], '_nevs_css_nonce_field')){ return; }

    //check autosave and revision
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    if( $is_autosave || $is_revision ){ return; }

    //insertion of Data
    $cssTextArea = ( isset($_POST['nevs-css-textarea']) ? $_POST['nevs-css-textarea'] : false);
    if( $cssTextArea ){
        update_post_meta($post_id, '__nevs_css',  esc_html($cssTextArea));
    }
}

