<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'main.js',get_template_directory_uri() . '/js/main.js',array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles');

function child_enqueue_styles() {

    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array());
}


//Theme settings//
function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Temos nustatymai", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page()
{
    ?>
	<div class="wrap">
		<h1>Theme Panel</h1>
		<form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            settings_fields("section2");
            do_settings_sections("footer-options");

            submit_button();
            ?>
		</form>
	</div>
    <?php
}


function display_twitter_element()
{
    ?>
	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
    ?>
	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}
function display_link_element()
{
    ?>
	<input type="text" name="linked_url" id="linked_url" value="<?php echo get_option('linked_url'); ?>" />
    <?php
}
function display_phone_element()
{
    ?>
    <input type="text" name="phone_number" id="phone_number" value="<?php echo get_option('phone_number'); ?>" />
    <?php
}
function display_footer()
{
    ?>
    <input type="text" name="footer_text" id="footer_text" value="<?php echo get_option('footer_text'); ?>" />
    <?php
}

function logo_display()
{
    ?>
	<input type="file" name="logo" />
    <?php echo get_option('logo'); ?>
    <?php
}
function handle_logo_upload($option)
{
    if(!empty($_FILES["file"]["tmp_name"]))
    {
        $urls = wp_handle_upload($_FILES["file"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }

    return $option;
}

function display_theme_panel_fields()
{
    add_settings_section("section", "Kontaktai", null, "theme-options");
    add_settings_section("section2", "Footer Settings", null, "footer-options");

    add_settings_field("phone_number", "Telefono Numeris", "display_phone_element", "theme-options", "section");
    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("linked_url", "LinkedIn Profile Url", "display_link_element", "theme-options", "section");

    add_settings_field("footer_text", "Footer Data", "display_footer", "footer-options", "section2");



    register_setting("section", "phone_number");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "linked_url");

    register_setting("section2", "footer_text");


}

add_action("admin_init", "display_theme_panel_fields");

//Adding custom logo //
add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function addName(){
    global $product;

    $product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );
    foreach( $product_cats_ids as $cat_id ) {
        $term = get_term_by( 'id', $cat_id, 'product_cat' );

        echo "<h3 id='cat-name'>$term->name</h3>";
    }
}

add_action('woocommerce_shop_loop_item_title','addName', 1);
remove_action("woocommerce_after_shop_loop_item_title","woocommerce_template_loop_price", 10);
add_action("woocommerce_after_shop_loop_item","woocommerce_template_loop_price", 15);


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>


