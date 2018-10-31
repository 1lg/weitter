<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: weitter
Plugin URI: http://wordpress.org/plugins/weitter/
Description: A weibo and twitter like plugin to help create your own feed.
Author: liligeng
Version: 1.6
Author URI: http://liligeng.com/
*/

add_action( 'init', 'weitter_activation' );

register_activation_hook(__FILE__,'weitter_activation');

function weitter_activation(){

    $labels = array(
        'name'               => '微推', 'post type general name', 'your-plugin-textdomain',
        'singular_name'      => '微推', 'post type singular name', 'your-plugin-textdomain',
        'menu_name'          => '微推', 'admin menu', 'your-plugin-textdomain',
        'name_admin_bar'     => '微推', 'add new on admin bar', 'your-plugin-textdomain',
        'add_new'            => '发布微推', 'tao', 'your-plugin-textdomain',
        'add_new_item'       => '发布新微推', 'your-plugin-textdomain',
        'new_item'           => '新微推', 'your-plugin-textdomain',
        'edit_item'          => '编辑微推', 'your-plugin-textdomain',
        'view_item'          => '查看微推', 'your-plugin-textdomain',
        'all_items'          => '所有微推', 'your-plugin-textdomain',
        'search_items'       => '搜索微推', 'your-plugin-textdomain',
        'parent_item_colon'  => 'Parent 微推:', 'your-plugin-textdomain',
        'not_found'          => '你还没有发布微推。', 'your-plugin-textdomain',
        'not_found_in_trash' => '回收站中没有微推。', 'your-plugin-textdomain'
    );

    register_post_type('weitter',array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => false ),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-cart',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 14,
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'comments', 'thumbnail', 'revisions', 'custom-fields' )
    ));
}

register_deactivation_hook(__FILE__,'weitter_deactivation');


function weitter_deactivation(){
    unregister_post_type('weitter');

}
?>