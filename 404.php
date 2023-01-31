<?php
/**
 * The template for displaying the 404 template in the hilive theme.
 *
 * @package WordPress
 * @subpackage hilive
 * @since hilive 1.0
 */

get_header();
?>

<main id="site-content">

	<div class="infoBlock--wide">

		<h1 class=""><?php _e( 'Page Not Found', 'hilive' ); ?></h1>
		<h3 class=""><?php _e( 'Error 404', 'hilive' ); ?></h3>

		<div class="intro-text"><p><?php _e( 'This page does’t exist or was removed! We suggest you to go back home.', 'hilive' ); ?></p></div>
		<a href="<?php echo get_home_url(); ?>" class="btn">BACK TO HOME</a>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php
get_footer();
