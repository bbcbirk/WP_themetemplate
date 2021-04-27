<?php
/**
 * Displays the site navigation.
 *
 */

?>

<?php if ( has_nav_menu( 'primary_logged_in' ) || has_nav_menu( 'primary_logged_out' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<?php
		if ( has_nav_menu( 'primary_logged_in' ) && has_nav_menu( 'primary_logged_out' ) ) :
			wp_nav_menu(
				array(
					'theme_location'  => is_user_logged_in() ? 'primary_logged_in' : 'primary_logged_out',
				)
			);
		elseif ( has_nav_menu( 'primary_logged_out' ) ) :
			wp_nav_menu(
				array(
					'theme_location'  => 'primary_logged_out',
				)
			);
		else :
			wp_nav_menu(
				array(
					'theme_location'  => 'primary_logged_in',
				)
			);
		endif;
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
