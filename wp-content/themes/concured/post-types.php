<?php

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'testimonial', [
		'label'  => null,
		'labels' => [
			'name'               => 'Testimonials', // основное название для типа записи
			'singular_name'      => 'Testimonial', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Testimonials Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

    register_post_type( 'problems', [
        'label'  => null,
        'labels' => [
            'name'               => 'Problems', // основное название для типа записи
            'singular_name'      => 'Problem', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Problems Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
		'capabilities' => [
			'create_posts' => false,
			'delete_posts' => false,
			'delete_published_posts' => false,
			'delete_private_posts' => false,
		],
		'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'main-top', [
        'label'  => null,
        'labels' => [
            'name'               => 'Main Top', // основное название для типа записи
            'singular_name'      => 'Main Top', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Main Top Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'about', [
        'label'  => null,
        'labels' => [
            'name'               => 'About', // основное название для типа записи
            'singular_name'      => 'About', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'About Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'demo', [
        'label'  => null,
        'labels' => [
            'name'               => 'Demo', // основное название для типа записи
            'singular_name'      => 'Demo', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Demo Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'features', [
        'label'  => null,
        'labels' => [
            'name'               => 'Features', // основное название для типа записи
            'singular_name'      => 'Feature', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Features Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'awards', [
        'label'  => null,
        'labels' => [
            'name'               => 'Awards', // основное название для типа записи
            'singular_name'      => 'Award', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Awards Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'titles', [
        'label'  => null,
        'labels' => [
            'name'               => 'Titles', // основное название для типа записи
            'singular_name'      => 'Title', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Titles Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'clients', [
        'label'  => null,
        'labels' => [
            'name'               => 'Clients', // основное название для типа записи
            'singular_name'      => 'Client', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Clients Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'platform', [
        'label'  => null,
        'labels' => [
            'name'               => 'Platform', // основное название для типа записи
            'singular_name'      => 'Platform', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Platform Blocks', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'faq', [
        'label'  => null,
        'labels' => [
            'name'               => 'FAQ', // основное название для типа записи
            'singular_name'      => 'FAQ', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'FAQ Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
//        'capability_type' => 'post',
//        'capabilities' => [
//            'create_posts' => false,
//            'delete_posts' => false,
//            'delete_published_posts' => false,
//            'delete_private_posts' => false,
//        ],
//        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'about-us', [
        'label'  => null,
        'labels' => [
            'name'               => 'About Us', // основное название для типа записи
            'singular_name'      => 'About Us', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'About Us Blocks', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'team', [
        'label'  => null,
        'labels' => [
            'name'               => 'Team', // основное название для типа записи
            'singular_name'      => 'Team', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Team Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
//        'capability_type' => 'post',
//        'capabilities' => [
//            'create_posts' => false,
//            'delete_posts' => false,
//            'delete_published_posts' => false,
//            'delete_private_posts' => false,
//        ],
//        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'partners', [
        'label'  => null,
        'labels' => [
            'name'               => 'Partners', // основное название для типа записи
            'singular_name'      => 'Partner', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Partners Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
//        'capability_type' => 'post',
//        'capabilities' => [
//            'create_posts' => false,
//            'delete_posts' => false,
//            'delete_published_posts' => false,
//            'delete_private_posts' => false,
//        ],
//        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'library', [
        'label'  => null,
        'labels' => [
            'name'               => 'Library', // основное название для типа записи
            'singular_name'      => 'Library', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Library Block', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
//        'capability_type' => 'post',
//        'capabilities' => [
//            'create_posts' => false,
//            'delete_posts' => false,
//            'delete_published_posts' => false,
//            'delete_private_posts' => false,
//        ],
//        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}