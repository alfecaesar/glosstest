<?php

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// hide wp admin top bar
add_filter('show_admin_bar', '__return_false');

// Team
register_post_type( 'team',
    array(
        'labels' => array(
            'name' => __( 'Team', 'ct' ),
            'singular_name' => __( 'Team', 'ct' ),
            'all_items' => __( 'All Team', 'ct' )
        ),
        'public' => true,
        'has_archive' => false,

        'menu_icon' => 'dashicons-groups',
        'supports' => array( 'title', 'thumbnail', 'page-attributes')
    )
);



function add_theme_menu_item(){
	add_menu_page("Theme Settings", "Theme Settings", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");


function theme_settings_page(){
    ?>
	    <div class="wrap">
	    <h1>Theme Settings</h1>
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

function footerContent(){
	?>
    	<input type="text" style="width:100%;" name="footer-content" id="footer-content" value="<?php echo get_option('footer-content'); ?>" />
    <?php
}

function facebookUrl(){
	?>
    	<input type="text" style="width:100%;" name="facebook-url" id="facebook-url" value="<?php echo get_option('facebook-url'); ?>" />
    <?php
}

function linkedInUrl(){
	?>
    	<input type="text" style="width:100%;" name="linkedIn-url" id="linkedIn-url" value="<?php echo get_option('linkedIn-url'); ?>" />
    <?php
}

function footerBarText(){
	?>
    	<input type="text" style="width:100%;" name="footerbar-text" id="footerbar-text" value="<?php echo get_option('footerbar-text'); ?>" />
    <?php
}

function footerBarButtonText(){
	?>
    	<input type="text" style="width:100%;" name="footerbarbutton-text" id="footerbarbutton-text" value="<?php echo get_option('footerbarbutton-text'); ?>" />
    <?php
}

function footerBarButtonUrl(){
	?>
    	<input type="text" style="width:100%;" name="footerbarbutton-url" id="footerbarbutton-url" value="<?php echo get_option('footerbarbutton-url'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
    
    // Facebook URL
	add_settings_field("facebook-url", "Facebook URL", "facebookUrl", "theme-options", "section");
    register_setting("section", "facebook-url");

    // LinkedIn URL
	add_settings_field("linkedIn-url", "LinkedIn URL", "linkedInUrl", "theme-options", "section");
    register_setting("section", "linkedIn-url");

    // Footer Bar Text
	add_settings_field("footerbar-text", "Footer Bar Text", "footerBarText", "theme-options", "section");
    register_setting("section", "footerbar-text");

    // Footer Bar Button Text
	add_settings_field("footerbarbutton-text", "Footer Bar Button Text", "footerBarButtonText", "theme-options", "section");
    register_setting("section", "footerbarbutton-text");

    // Footer Bar Button Url
	add_settings_field("footerbarbutton-url", "Footer Bar Button Url", "footerBarButtonUrl", "theme-options", "section");
    register_setting("section", "footerbarbutton-url");

    // Footer Text
	add_settings_field("footer-content", "Footer Text", "footerContent", "theme-options", "section");
    register_setting("section", "footer-content");
}

add_action("admin_init", "display_theme_panel_fields");