<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php

	$footerbartext = get_option('footerbar-text');
	$footerbarbuttontext = get_option('footerbarbutton-text');
	$footerbarbuttonurl = get_option('footerbarbutton-url');
	$footertext = get_option('footer-content');
?>

<div class="wrapper" id="footerBar">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-8 col-sm-12 footerbar-text text-left"><?php echo $footerbartext; ?></div>
			<div class="col-md-4 col-sm-12 text-right footerbar-btn">
				<a href="<?php echo $footerbarbuttonurl; ?>" class="btn"><?php echo $footerbarbuttontext; ?></a>
			</div>
		</div>
	</div>
</div>


<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12 text-center">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php echo $footertext; ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

