add_action( 'wp_enqueue_scripts', 'css_based_on_user_roles' );
function css_based_on_user_roles(){
	$user = wp_get_current_user();
	if ( in_array( 'author', (array) $user->roles ) ) {
		echo '<style>
				
			</style>';	
	}
}
