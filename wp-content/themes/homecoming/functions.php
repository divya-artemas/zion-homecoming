<?php 
// Register custom navigation walker

add_theme_support( 'menus' );
/***************** Thumbnail Display *********************/
add_theme_support( 'post-thumbnails' );
/***************** End Thumbnail Display *****************/


/*************** wp_nav_menu *****************************/
register_nav_menus( array('header' => __('Header Navigation', 'homecoming'),'responsive' => __('Responsive Navigation', 'homecoming') ));

/*************** end wp_nav_menu **************************/

/*************** wp_nav_menu footer *****************************/
register_nav_menus( array('footer' => __('Footer Navigation', 'homecoming'),'responsive' => __('Responsive Navigation', 'homecoming')));
/*************** end wp_nav_menu footer **************************/

/*************** Theme Scripts   **************************/
function homecoming_scripts_styles() {
  /*
   * Adds JavaScript to pages with the comment form to support<p class="navLabelTxt">your questions</p>
   * sites with threaded comments (when in use).
   */
  // Add Genericons font, used in the main stylesheet.

   // wp_enqueue_style( 'artemas-aos', get_template_directory_uri() . '/css/aos.css', array(), '1.00' ); 
   // wp_enqueue_style( 'artemas-grid', get_template_directory_uri() . '/css/grid.min.css', array(), '1.00' ); 
    //wp_enqueue_style( 'artemas-style', get_template_directory_uri() . '/css/default.css', array(), '1.00' );  
    //wp_enqueue_style( 'artemas-mobile', get_template_directory_uri() . '/css/mobile.css', array(), '1.00' );
    //wp_enqueue_style( 'artemas-flickity', get_template_directory_uri() . '/css/flickity.css', array(), '1.00' ); 
   // wp_enqueue_style( 'artemas-menu', get_template_directory_uri() . '/css/menu.css', array(), '1.00' );   
    //wp_enqueue_style( 'artemas-all', get_template_directory_uri() . '/css/all.min.css', array(), '1.00' ); 
 

  if( !is_admin() ){
        wp_deregister_script('jquery');
       // wp_register_script('jquery', (get_template_directory_uri() . '/js/jquery-3.2.1.min.js'), false, '');
        wp_enqueue_script('jquery');
  }

   }
add_action( 'wp_enqueue_scripts', 'homecoming_scripts_styles' );
/*************** end Theme Scripts ************************/

// Customising the body_class()
function custom_body_class( $classes ) {
  global $post;
  if(is_front_page()) {
    $classes[] = 'home';
  } 
     elseif(is_page_template('template-homenew.php')) {
    $classes[] = 'home';
  } 
  elseif(is_page_template('template-polling.php')) {
    $classes[] = 'polling';
  } 
  elseif(is_page_template('template-userdetails.php') || is_page_template('template-stage1.php')) {
    $classes[] = 'user';
  } 
  elseif(is_page_template('template-thankyou.php') || is_page_template('template-payment.php') || is_page_template('template-finalpayment.php') || is_page_template('template-ticket.php')) {
    $classes[] = 'thank-you';
  } 
  else {
    $classes[] = ' ';
  }

  return $classes;     
}
add_filter( 'body_class','custom_body_class' );



/************** walker_nav_menu ****************************/
class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
 //add classes to ul sub-menus
function homecomingt_lvl( &$output, $depth = 0, $args = array() ) {
   // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'sub-menu',
       ( $display_depth % 2  ? '' : '' ),
       ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
       'sub-menu-' . $display_depth
       );
   $class_names = implode( ' ', $classes );
  
//    // build html
    $output .= "\n" . $indent . '<ul class="'.$class_names.'">'."\n";
}
//function homecomingt_lvl(&$output, $depth)
//    {
//        $indent = str_repeat("\t", $depth);
//        $output .= "\n$indent<ul class=\"sub-menu\"><div class=\"arrow_up\"></div>\n";
//    }
//    function end_lvl(&$output, $depth)
//    {
//        $indent = str_repeat("\t", $depth);
//        $output .= "$indent</ul>\n";
//    } 
  
// add main/sub classes to li's and links
 function homecomingt_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    global $wp_query;
     
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
    
    // depth dependent classes
    $depth_classes = array(( $depth == 0 ? '' : '' ),
        ( $depth >=2 ? '' : '' ),
        ( $depth % 2 ? '' : '' ),);
    $depth_class_names = esc_attr( implode( ' ',$depth_classes) );
  
    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
      // build html
     
    $arrow="";
    if($depth==2)
    {
    $depth="sub";
    $arrow="arrow";
    }
    $output .= $indent . '<li class="'.$class_names.''.$class_names.'">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    //$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
  
    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );
  
    // build html
    $output .= apply_filters( 'walker_nav_menu_homecomingt_el', $item_output, $item, $depth, $args );
}
}
/**************End walker_nav_menu ****************************/
/******************* Display Id In posts ******************************************/
//add_filter( 'manage_posts_columns', 'revealid_add_id_column', 5);
add_action('manage_posts_custom_column', 'revealid_id_column_content', 5, 2 );
add_filter('manage_pages_columns', 'revealid_add_id_column', 5);
add_action('manage_pages_custom_column', 'revealid_id_column_content', 5, 2);

function revealid_add_id_column( $columns ) {
   $columns['revealid_id'] = 'ID';
   return $columns;
}

function revealid_id_column_content( $column, $id ) {
  if( 'revealid_id' == $column ) {
    echo $id;
  }
}
/***************** End Display Id In posts *****************************************/
  

/**************Disable all wordpress updates********************************/
function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
// add_filter('pre_site_transient_update_core','remove_core_updates');
// add_filter('pre_site_transient_update_plugins','remove_core_updates');
// add_filter('pre_site_transient_update_themes','remove_core_updates');
/**************Disable all wordpress updates********************************/

/**************hide Admin Bar front end********************************/
add_filter('show_admin_bar', '__return_false');
/**************hide Admin Bar front end********************************/



//remove auto p tag in custom fields//
remove_filter ('acf_the_content', 'wpautop');

//remove auto p tag in custom fields//


/****************Set active to current Menu link*****************************/ 
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
/****************End Menu active *****************************/ 



/**********  Creating Theme settings Page**********/
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}
/********** End Creating Option Page**********/

// Add widget area above Woocommerce products


function homecoming_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Widget Area', 'homecoming' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'homecoming' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

   register_sidebar( array(
    'name'          => __( 'Footer Area', 'homecoming' ),
    'id'            => 'footer-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'homecoming' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'homecoming_widgets_init' );

//random string


// function generateRandomString($length = 5) {
//    //return substr(str_shuffle(str_repeat($x='012345', ceil($length/strlen($x)) )),1,$length);
//     $characters = '0123456789';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
   
// }

function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function wpse306816_CF7_custom_reg_code() {

 return date("y") . generateRandomString();
	//return generateRandomString();
}

add_shortcode('CF7_custom_reg_code', 'wpse306816_CF7_custom_reg_code');

// Check mail address already in Database - start

function is_already_submitted($formPostId, $fieldName, $fieldValue) {

    global $wpdb;

    /*We make a select in the table where the contacts are recorded, checking if the email informed already exists on today's date */

      $entry = $wpdb->get_results( "SELECT * FROM wp_cf7_vdata_entry WHERE value LIKE '%$fieldValue%' AND cf7_id = '$formPostId'" );
	//print_r($entry);
    
    // If the select query in the database is positive (the email exists on the current date), it returns the error in the form, in the email field, not sending
     
       $found = false;
        if (!empty($entry)) {
           $found = true;       
        }
	
    return $found;  
}

function my_validate_email($result, $tag) {
    $formPostId = '34'; // Change to ID of the form containing this field
    $fieldName = 'your-email'; // Change to your form's unique field name  
	//$hh="!!";
    $errorMessage = 'This email address is already registered!' ; // Change to your error message
    // Change to your error message   
   
    $name = $tag['name'];
	//echo '<input type="text" name="yemailr" value="'.$_POST[$name].'"/>';
	
    if ($name == $fieldName) {		
        if (is_already_submitted($formPostId, $fieldName, $_POST[$name])) {			
            $result->invalidate($tag, $errorMessage);           
        }
    }

    return $result;   
}
add_filter('wpcf7_validate_email*', 'my_validate_email', 10, 2);



?>