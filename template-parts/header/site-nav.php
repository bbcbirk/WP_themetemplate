<?php
/**
 * Displays the site navigation.
 *
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => is_user_logged_in() ? 'primary_logged_in' : 'primary_logged_out',
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
