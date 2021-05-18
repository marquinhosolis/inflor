<?php
//MENUS
    register_nav_menus( array(
        'main_menu'    => 'Main Menu',
    ) );

// POST THUMBNAILS
    add_theme_support( 'post-thumbnails' );

// EXCERPT SIZE
    function mytheme_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

    function new_excerpt_more( $more ) {
        return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

// REGISTER CASE STUDIES CUSTOM POST
    // CREATING A CUSTOM TAXONOMY FOR USE A CATEGORY ONLY ON CUSTOM POST TYPE
    function tr_create_my_taxonomy() {
        register_taxonomy(
            'case-studies',
            'team',
            array(
                'label' => __( 'Category' ),
                'rewrite' => array( 'slug' => 'case-studies' ),
                'hierarchical' => true,
            )
        );
        register_taxonomy(
            'solutions',
            'team',
            array(
                'label' => __( 'Category' ),
                'rewrite' => array( 'slug' => 'solutions' ),
                'hierarchical' => true,
            )
        );
    }
    add_action( 'init', 'tr_create_my_taxonomy' );

    // CUSTOM POST TYPE
    function create_post_type() {
        register_post_type( 'case-studies',
            array(
                'labels' => array(
                    'name' => __( 'Case Studies' ),
                    'singular_name' => __( 'Case Study' )
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-awards',
                'menu_position' => 5,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                'publicly_queryable' => true,
                'taxonomies' => array( 'case-studies' ),
            )
        );
        register_post_type( 'solutions',
            array(
                'labels' => array(
                    'name' => __( 'Solutions' ),
                    'singular_name' => __( 'Solution' )
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-lightbulb',
                'menu_position' => 5,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                'publicly_queryable' => true,
                'taxonomies' => array( 'solutions' ),
            )
        );
    }
    add_action( 'init', 'create_post_type' );


// GLOBAL VARIABLES: SOCIAL LINKS, ADDRESSES, PHONE NUMBERS
    function theme_variables($query) {
        $dataArray = array(
            'address_US' => "5323 Millenia Lakes Blvd, Suite 300 <br>Orlando, Florida – 32819",
            'phone_US' => "407.734.4048",
            'google_maps_link_US' => 'https://goo.gl/maps/Anrb6wFshfnnJ2Fh6',

            'address_BR' => "Rua Eurico de Aguiar, 888 <br>Ed. Metropolitan Office, <br>Santa Lúcia  - Vitória, ES. <br>CEP: 29056-200",
            'phone_BR' => "+55.27.2122.0888",
            'google_maps_link_BR' => 'https://goo.gl/maps/yPTtE2u4wqhU7GTD8',

            'facebook' => "https://www.facebook.com/inflorglobal",
            'linkedin' => "https://www.linkedin.com/company/inflorglobal",
            //'twitter' => "https://www.twitter.com",
            //'instagram' => "https://www.instagram.com",
            //'youtube' => "https://www.youtube.com",
        );
        echo $dataArray[$query];
    }
    add_action( 'init', 'theme_variables' );
    

// FUNCTION TO ADD BUTTON CLASS TO PREV/NEXT POST 
    function add_class_next_post_link($html){
        $html = str_replace('<a','<a class="btn btn-default"',$html);
        return $html;
    }
    add_filter('next_post_link','add_class_next_post_link',10,1);
    
    function add_class_previous_post_link($html){
        $html = str_replace('<a','<a class="btn btn-default"',$html);
        return $html;
    }
    add_filter('previous_post_link','add_class_previous_post_link',10,1);
?>