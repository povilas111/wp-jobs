<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
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


    add_settings_field("phone_number", "Telefono Numeris", "display_phone_element", "theme-options", "section");
    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("linked_url", "LinkedIn Profile Url", "display_link_element", "theme-options", "section");

    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");


    register_setting("section", "phone_number");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "linked_url");
    register_setting("section", "logo", "handle_logo_upload");

}

add_action("admin_init", "display_theme_panel_fields");






if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>


