<?php

global $wp_filter;
//ts_var( $wp_filter['body_class'] );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action('genesis_entry_header','genesis_do_post_title',20); 
remove_action('msdlab_title_area','genesis_do_post_title');
add_action('msdlab_title_area','msdlab_category_title');
function msdlab_category_title(){
    print '<h1 class="entry-title" itemprop="headline">'.single_cat_title( '', false ).'</h1>';
}
add_action('genesis_before_loop','msdlab_category_header');
function msdlab_category_header(){
    print category_description();
}
genesis();
