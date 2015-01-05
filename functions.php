<?php 
	
	function wp_resources() {
		wp_enqueue_style('style',get_stylesheet_uri());
	}

	

	//navitaion menus
	register_nav_menus(array(
		'primary'=> __('Primary Menu'),
		'nosotros-menu' => ('Menu Nosotros'),
		'servicios-menu' => ('Menu Servicios'),
		'footer' => __('Footer Menu'),

	));

	//get top ancestor
	function get_top_ancestor_id(){
		global $post;
		if ($post->post_parent){
			$ancestors = array_reverse(get_post_ancestors($post->ID));
			return $ancestors[0];
		}

		return $post->ID;
	}

	//has children?
	function has_children(){
		global $post;
		$pages = get_pages('child_of=' . $post->ID);
		return count($pages);
	}

	//add widget location

	function widgetInit(){
		register_sidebar( array(
			'name' => 'Sidebar',
			'id' => 'sidebar1',
			'before_widget' => '<div class="sidebar1-widget-item">',
			'after_widget' => '</div>'	
		));

		register_sidebar( array(
			'name' => 'Footer Primario',
			'id' => 'footer1',
			'before_widget' => '<div class="footer1-widget-item">',
			'after_widget' => '</div>'	
		));

		register_sidebar( array(
			'name' => 'Footer Secundario',
			'id' => 'footer2',
			'before_widget' => '<div class="footer2-widget-item">',
			'after_widget' => '</div>'	
		));
		//front page widgets
		register_sidebar( array(
			'name' => 'Servicios Fila 1 - Principal',
			'id' => 'w_servicios-1',
			'before_widget' => '<div class="w_servicios-item-container"><div class="w_servicios-item-before"></div><div class="w_servicios-item">',
			'after_widget' => '</div><div class="w_servicios-item-after"></div></div>'	
		));
		register_sidebar( array(
			'name' => 'Servicios Fila 2- Principal',
			'id' => 'w_servicios-2',
			'before_widget' => '<div class="w_servicios-item-container"><div class="w_servicios-item-before"></div><div class="w_servicios-item">',
			'after_widget' => '</div><div class="w_servicios-item-after"></div></div>'
		));
		register_sidebar( array(
			'name' => 'Alianzas1 - Principal',
			'id' => 'w_alianzas-1',
			'before_widget' => '<div class="w_alianzas1-item">',
			'after_widget' => '</div>'	
		));
		register_sidebar( array(
			'name' => 'Alianzas2 - Principal',
			'id' => 'w_alianzas-2',
			'before_widget' => '<div class="w_alianzas2-item">',
			'after_widget' => '</div>'	
		));
		register_sidebar( array(
			'name' => 'Clientes - Principal',
			'id' => 'w_clientes',
			'before_widget' => '<div class="w_clientes-item">',
			'after_widget' => '</div>'	
		));
	}


function themeprefix_scripts_styles(){
    wp_enqueue_script ( 'slicknav', get_stylesheet_directory_uri().'/js/jquery.slicknav.min.js', array( 'jquery' ),'1',false);  
    wp_enqueue_style ( 'slicknavcss', get_stylesheet_directory_uri().'/css/slicknav.css','', '1', 'all' );
}
//Set Responsive Nav to fire - change CSS ID of menu to suit
//Responsive Nav
function themeprefix_responsive_menujs() {
	echo 	"<script>
			jQuery(function($) {
			$('#menu-altermenu').slicknav({
				Label:'headermenu',
				duration:400,
				prependTo:'.menu-altermenu-container'
			});

			});
			</script>";
}
function pageStyles(){
	if (is_front_page()){
		wp_enqueue_style ( 'frontpagecss', get_stylesheet_directory_uri().'/css/front-page.css','', '1', 'all' );
	}
	if ((is_page() && !is_page_template()) or is_home() or is_single()){
		wp_enqueue_style ( 'pagecss', get_stylesheet_directory_uri().'/css/page.css','', '1', 'all' );
		wp_enqueue_style ( 'asidecss', get_stylesheet_directory_uri().'/css/aside.css','', '1', 'all' );
	}
	if (is_page(15) or is_page(326)) {
		wp_enqueue_style ( 'pagecss', get_stylesheet_directory_uri().'/css/page.css','', '1', 'all' );
		wp_enqueue_style ( 'asidecss', get_stylesheet_directory_uri().'/css/aside.css','', '1', 'all' );
		wp_enqueue_style ( 'contactocss', get_stylesheet_directory_uri().'/css/contacto.css','', '1', 'all' );
	}

	if (is_page(27)){
		wp_enqueue_style ( 'nosotroscss', get_stylesheet_directory_uri().'/css/nosotros.css','', '1', 'all' );	
	}
}

function contact_send_message() {

    $contact_errors = false;

    // get the posted data
    $name = $_POST["name"];
    $email_address = $_POST["email"];
    //$phone_num = $_POST["phone"];
    $message = $_POST["message"];

    // write the email content
    $header .= "MIME-Version: 1.0\n";
    $header .= "Content-Type: text/html; charset=utf-8\n";
    $header .= "From:" . $email_address;

    $message = "Name: $name\n";
    $message .= "Email Address: $email_address\n";
    //$message .= "Telefon: $contact_phone\n";
    $message .= "Message:\n$message";

    $subject = "Zpráva z webu";
    $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

    $to = "marlonjjtp@gmail.com";

    // send the email using wp_mail()
    if( !wp_mail($to, $subject, $message, $header) ) {
        $contact_errors = true;
    }

}

		
add_action('widgets_init','widgetInit');
add_action('wp_enqueue_scripts','wp_resources');
add_action('wp_enqueue_scripts', 'themeprefix_scripts_styles');
add_action('wp_enqueue_scripts','pageStyles');
add_action ('genesis_after','themeprefix_responsive_menujs');

add_action('contact_send_message', 'contact_send_message');

add_custom_background();
 ?>