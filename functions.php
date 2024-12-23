<?php 

if(!function_exists('mythemefunctions')){
    function mythemefunctions(){
        add_theme_support('post-thumbnails');
        add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    };


    load_theme_textdomain( 'neogumtextdomain', get_template_directory() . '/languages' );
    register_nav_menus(array(

        'top_menu'=> __("neogym top menu", "neogumtextdomain"),
    ));
}

add_action("after_setup_theme", "mythemefunctions");








if(!function_exists('neogum_service')){
    function neogum_service(){
            register_post_type("drynous", array(
                "labels" =>array(
                    "name" => __('service', 'textdomain'),
                    "singular_name" => __('student', 'textdomain'), 
                    'not_found' => __('not student found' , 'textdomain'),
                    "set_featured_image"=> __('add new student', 'textdomain')
                    
 
                ),
                "public" =>true,
                "supports" => array('title', 'editor', 'thumbnail'),
                "has_archive" =>true
            ));
    }
};

add_action('init', 'neogum_service');


if(!function_exists('neogum_students')){
    function neogum_students(){
            register_post_type("student", array(
                "labels" =>array(
                    "name" => __('students', 'textdomain'),
                    "singular_name" => __('student', 'textdomain'), 
                    'not_found' => __('not student found' , 'textdomain'),
                    "set_featured_image"=> __('add new student', 'textdomain')
                    
 
                ),
                "public" =>true,
                "supports" => array('title', 'editor', 'thumbnail'),
                "has_archive" =>true
            ));
    }
};

add_action('init', 'neogum_students');





// add texonomy


if(!function_exists('studentsdeparment')){
    function studentsdeparment(){

         $labels = array(
            'name'              => _x( 'students', 'textdomain' ),
            'singular_name'     => _x( 'student', 'textdomain' ),
            'search_items'      => __( 'Search Courses' ),
            'all_items'         => __( 'All Courses' ),
            'parent_item'       => __( 'Parent Course' ),
            'parent_item_colon' => __( 'Parent Course:' ),
            'edit_item'         => __( 'Edit Course' ),
            'update_item'       => __( 'Update Course' ),
            'add_new_item'      => __( 'Add New Course' ),
            'new_item_name'     => __( 'New Course Name' ),
            'menu_name'         => __( 'Student' ),
         );
        $args = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => [ 'slug' => 'studentsdeparment' ],
        );

        register_taxonomy('studentsdeparment',['student'], $args);

    };
};

add_action('init','studentsdeparment');

 

 

 





?>