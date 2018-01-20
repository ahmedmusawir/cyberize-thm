<?php 

/*======================================
=            ADD ADMIN LOGO            =
======================================*/

function cyberize_admin_logo() {

	echo '<a href="https://cyberizegroup.com" target="_blank"  title="Go To CYBERIZE"><img style="padding-top: 2rem;" src="/wp-content/uploads/2018/01/cyberize-group-logo-clear-373x60.png" alt=""></a>';

}

add_action( 'admin_notices', 'cyberize_admin_logo' );

/*=====  End of ADD ADMIN LOGO  ======*/

/*=============================================
=            ADD ADMIN FOOTER TEXT            =
=============================================*/

function cyberize_admin_footer_text() {

	echo 'This is how <a href="https://cyberizegroup.com" target="_blank"  title="Go To CYBERIZE">Cyberize Group</a> is saving humanity!';
}

add_filter( 'admin_footer_text', 'cyberize_admin_footer_text' );

/*=====  End of ADD ADMIN FOOTER TEXT  ======*/

function cyberize_footer_version_replace() {
    // remove_filter( 'update_footer', 'core_update_footer' ); 
    add_filter( 'update_footer', 'cyberize_footer_call_back' );
}

add_action( 'admin_menu', 'cyberize_footer_version_replace' );

function cyberize_footer_call_back() {
	echo 'Based on the Moose Framework! &copy; 2018';
}


/*==============================================
=            REMOVING ADMIN WIDGETS            =
==============================================*/

function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        // remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8 
        remove_meta_box( 'rg_forms_dashboard', 'dashboard', 'normal');

}
add_action( 'admin_init', 'remove_dashboard_meta' );

/*=====  End of REMOVING ADMIN WIDGETS  ======*/

/*===========================================
=            ADMIN WIDGETS SETUP            =
===========================================*/

// Create the function to use in the action hook
function cyberize_setup_dashboard_widget() {

	//REMOVING WELCOME PANEL
	remove_action('welcome_panel', 'wp_welcome_panel');

	//ADDING WIDGET 1
	add_meta_box( 'cyberize-widget-1', 'CYBERIZE WIDGET 1', 'cyberize_widget_content_1', 'dashboard', 'side', 'high' );
	add_meta_box( 'cyberize-widget-2', 'CYBERIZE WIDGET 2', 'cyberize_widget_content_2', 'dashboard', 'normal', 'low' );
	add_meta_box( 'cyberize-widget-3', 'CYBERIZE WIDGET 3', 'cyberize_widget_content_3', 'dashboard', 'side', 'default' );

} 
 
// Hook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'cyberize_setup_dashboard_widget' );

function cyberize_widget_content_1() {

	echo 'Moose is Loose ...';
	echo '<a href="https://cyberizegroup.com" target="_blank"  title="Go To CYBERIZE"><img style="width: 100%;" src="/wp-content/uploads/2018/01/cyberize-banner-800x600.jpg" alt=""></a>';
}
function cyberize_widget_content_2() {
	
	echo 'Moose is Loose ...';
	echo '<a href="https://cyberizegroup.com" target="_blank"  title="Go To CYBERIZE"><img style="width: 100%;" src="/wp-content/uploads/2018/01/cyberize-banner-800x600.jpg" alt=""></a>';
}
function cyberize_widget_content_3() {
	
	echo 'Moose is Loose ...';
	echo '<a href="https://cyberizegroup.com" target="_blank"  title="Go To CYBERIZE"><img style="width: 100%;" src="/wp-content/uploads/2018/01/cyberize-banner-800x600.jpg" alt=""></a>';
}
/*=====  End of ADMIN WIDGETS SETUP  ======*/

/*====================================
=            ADD HELP TAB            =
====================================*/

function cyberize_add_help_tab() {

	$screen = get_current_screen();
	$screen->add_help_tab( array(
			'id' => 'cyberize_admin_help_tab',
			'title' => 'Help with your site',
			'callback' => 'cyberize_admin_help_callback'
		)
	);
}

add_action( 'load-post.php', 'cyberize_add_help_tab' ); //old posts
add_action( 'load-post-new.php', 'cyberize_add_help_tab' ); //new posts

//callback
function cyberize_admin_help_callback() {

	echo '<h3>This is the Help Headline</h3>';
	echo '<p> 
			Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
		</p>';
	echo '<a href="https://cyberizegroup.com" target="_blank"  title="Go To CYBERIZE"><img style="width: 50%;" src="/wp-content/uploads/2018/01/cyberize-banner-800x600.jpg" alt=""></a>';

}


/*=====  End of ADD HELP TAB  ======*/
	

/*==============================================
=            VIDEO METABOX ON POSTS            =
==============================================*/

function cyberize_video_metabox() {

	add_meta_box( 'cyberize-video-1', 'CYBERIZE VIDEO', 'cyberize_video_metabox_callback', 'page', 'side', 'high' );

}

add_action( 'add_meta_boxes', 'cyberize_video_metabox' );

//callback
function cyberize_video_metabox_callback() {

	//echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/pUfGjWYpE-I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
	//echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/K988Q6VYG7I&list=PLbq8EEQ9L98HIqmxJhz1dtWF9IrbwrDEv" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
	// echo '<a href="https://www.youtube.com/watch?v=K988Q6VYG7I&list=PLbq8EEQ9L98HIqmxJhz1dtWF9IrbwrDEv" title="" target="_blank">Training Videos</a>';
	echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/K988Q6VYG7I?list=PLbq8EEQ9L98HIqmxJhz1dtWF9IrbwrDEv" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
}


/*=====  End of VIDEO METABOX ON POSTS  ======*/


































