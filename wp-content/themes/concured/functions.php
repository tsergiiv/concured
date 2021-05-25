<?php

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_footer', 'enqueue_scripts');

function enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri(), array(), date("h:i:s"));

    wp_register_style('my', get_template_directory_uri() . '/assets/css/my.css', array(), date("h:i:s"));
    wp_enqueue_style('my');
}

function enqueue_scripts()
{
	wp_register_script('lib', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js', array(), date("h:i:s"));
	wp_enqueue_script('lib');

	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), date("h:i:s"));
	wp_enqueue_script('jquery');

	wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), date("h:i:s"));
	wp_enqueue_script('slick');

	wp_register_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), date("h:i:s"));
	wp_enqueue_script('nice-select');

	wp_register_script('validation', get_template_directory_uri() . '/assets/js/validation.js', array('jquery'), date("h:i:s"));
	wp_enqueue_script('validation');

	wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), date("h:i:s"));
	wp_enqueue_script('main');

	wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/my.js', array('jquery'), date("h:i:s"));
	wp_enqueue_script('my');
}

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/post-types.php';

function year_shortcode () {
    $year = date_i18n ('Y');
    return $year;
}
add_shortcode ('year', 'year_shortcode');

function send_mail()
{
    $headers = array(
        'From: Concured <root@takasho.work>',
        'content-type: text/html',
    );

    $to = get_option('letters_email'); // place wp admin email here
    $subject = stripslashes("Form from Concured Landing");

    $b = [];
    foreach ($_POST as $key => $value) {
        $b[] = "<b>{$key}</b>: " . stripslashes($value);
    }

    $body = implode('<br>', $b);

    $result = wp_mail($to, $subject, $body, $headers);

    if ($result) {
        $data = [
            'error' => 0,
            'message' => 'Email success sent!'
        ];
    } else {
        $data = [
            'error' => 1,
            'message' => 'Sorry, email not sent'
        ];
    }

    echo wp_json_encode($data);
    die;
}

add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');

function add_email_field_to_general_admin_page(){
    $option_name = 'letters_email';

    // регистрируем опцию
    register_setting( 'general', $option_name );

    // добавляем поле
    add_settings_field(
        'letters_email',
        'Email For Letters',
        'letters_email_setting_callback_function',
        'general',
        'default',
        array(
            'id' => 'letters_email',
            'option_name' => 'letters_email'
        )
    );
}

function letters_email_setting_callback_function( $val ){
    $id = $val['id'];
    $option_name = $val['option_name'];
    ?>
	<input
			type="email"
			name="<? echo $option_name ?>"
			size="50"
			id="<? echo $id ?>"
			value="<? echo esc_attr( get_option($option_name) ) ?>"
	/>
    <?
}

add_action('admin_menu', 'add_email_field_to_general_admin_page');

//hook into the init action and call create_book_taxonomies when it fires

add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it subjects for your posts

function create_subjects_hierarchical_taxonomy() {
	$labels = array(
		'name' => _x( 'FAQ Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'FAQ Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search FAQ Category' ),
		'all_items' => __( 'All FAQ Categories' ),
		'parent_item' => __( 'Parent FAQ Category' ),
		'parent_item_colon' => __( 'Parent FAQ Category:' ),
		'edit_item' => __( 'Edit FAQ Category' ),
		'update_item' => __( 'Update FAQ Category' ),
		'add_new_item' => __( 'Add FAQ Category' ),
		'new_item_name' => __( 'New FAQ Category' ),
		'menu_name' => __( 'FAQ Categories' ),
	);

	register_taxonomy('faq-category',array('faq'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'faq-category' ),
	));

	$labels = array(
		'name' => _x( 'Team Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Team Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Team Category' ),
		'all_items' => __( 'All Team Categories' ),
		'parent_item' => __( 'Parent Team Category' ),
		'parent_item_colon' => __( 'Parent Team Category:' ),
		'edit_item' => __( 'Edit Team Category' ),
		'update_item' => __( 'Update Team Category' ),
		'add_new_item' => __( 'Add Team Category' ),
		'new_item_name' => __( 'New Team Category' ),
		'menu_name' => __( 'Team Categories' ),
	);

	register_taxonomy('team-category',array('team'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'team-category' ),
	));

    $labels = array(
        'name' => _x( 'Price Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Price Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Price Category' ),
        'all_items' => __( 'All Price Categories' ),
        'parent_item' => __( 'Parent Price Category' ),
        'parent_item_colon' => __( 'Parent Price Category:' ),
        'edit_item' => __( 'Edit Price Category' ),
        'update_item' => __( 'Update Price Category' ),
        'add_new_item' => __( 'Add Team Category' ),
        'new_item_name' => __( 'New Team Category' ),
        'menu_name' => __( 'Price Categories' ),
    );

    register_taxonomy('price-category',array('price'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'price-category' ),
    ));
}

function add_class_to_paragraphs($content){
	return preg_replace('/<p([^>]+)?>/', '<p$1 class="post-content-paragraph">', $content);
}
add_filter('the_content', 'add_class_to_paragraphs');

function add_class_to_figcaption($content){
	return preg_replace('/<figcaption([^>]+)?>/', '<figcaption$1 class="post-content-photo-caption">', $content);
}
add_filter('the_content', 'add_class_to_figcaption');

function add_class_to_figure($content){
	return preg_replace('/wp-block-image/', 'post-content-photo', $content);
}
add_filter('the_content', 'add_class_to_figure');

function add_class_to_img($content){
	return preg_replace('/wp-image-([1-9]*)/', 'wp-image-$1 post-content-photo-img', $content);
}
add_filter('the_content', 'add_class_to_img');

function wrap_img($content){
	return preg_replace('/<img([^>]+)?>/', '<div class="post-content-photo-img-wrap"><img$1></div>', $content);
}
add_filter('the_content', 'wrap_img');

function wpb_set_post_views($postID) {
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_get_post_views($postID){
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count.' Views';
}

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );