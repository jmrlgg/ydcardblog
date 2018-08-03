<?php
// Register new nav walker
require_once('class-wp-bootstrap-navwalker.php');

// Theme Support
function wpb_theme_setup(){
    // navwalker support
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer-menu' => __('Footer Menu')
    ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

function set_excerpt_length() {
    return 40;
}
add_filter( 'excerpt_length', 'set_excerpt_length');

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return ' <small style="font-size:10px;text-decoration:none;"><a href="'.get_the_permalink().'" rel="nofollow">  .......</a></small>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
    add_image_size( 'post-thumb', 200, 500 );
}




// Widget Locations
function wpb_init_widgets($id) {
register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="card mb-5"> <!-- Card body --><div class="card-body">',
    'after_widget' => '</div></div>',
    'before_title' => '<h6 class="h1-responsive text-left font-weight-bold text-uppercase text-monospace mb-0" style="font-size:1em;">',
    'after_title' => '</h6> <hr class="purple mt-0">  '

));
}

add_action('widgets_init', 'wpb_init_widgets');

function afterpost_email() { 

    if (is_single()) { ?>
    <br>
        <div class="card default-color-dark">
                            
                            <!--Card image-->

                        
                            <!--Card content-->
                            <div class="card-body text-center">
                                <!--Title-->

                                <!--Text-->
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://yolodigi.us18.list-manage.com/subscribe/post?u=5f9b826dd3ef16993baf5019d&amp;id=08006f0e97" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5f9b826dd3ef16993baf5019d_08006f0e97" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
                            </div>
                        
                        </div>

    
    <?php } }
    
    add_action('thesis_hook_after_post' , 'afterpost_email');

