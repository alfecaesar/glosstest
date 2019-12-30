<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php
	if ( is_front_page() ) {
?>		


	<div id="bannerarea" class="wrapper" style="background-image: url('<?php if ( get_field( 'banner_image') ) { ?><?php the_field( 'banner_image' ); ?><?php } ?>')">
		<div class="<?php echo esc_attr( $container ); ?>" id="banner-content" >
			<h1><?php the_field( 'banner_heading' ); ?></h1>
			<p><?php the_field( 'banner_sub_heading' ); ?></p>
			<?php $banner_button_url = get_field( 'banner_button_url' ); ?>
			<?php if ( $banner_button_url ) { ?>
				<a href="<?php echo $banner_button_url; ?>" class="btn"><?php the_field( 'banner_button_text' ); ?></a>
			<?php } ?>
		</div>
	</div>

	<?php if ( have_rows( 'first_section' ) ) : ?>
		<?php while ( have_rows( 'first_section' ) ) : the_row(); ?>
			
			<div id="firstsection" class="wrapper">
				<div class="<?php echo esc_attr( $container ); ?>" id="fs-content" >
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<?php if ( get_sub_field( 'fs_image') ) { ?>
								<img src="<?php the_sub_field( 'fs_image' ); ?>" />
							<?php } ?>
						</div>
						<div class="col-md-6 col-sm-12 fs-content-text">
							<h2><?php the_sub_field( 'fs_title' ); ?></h2>
							<p><?php the_sub_field( 'fs_content' ); ?></p>
							<a class="btn" href="<?php echo $fs_button_link['url']; ?>"><?php the_sub_field( 'fs_button_text' ); ?></a>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'second_section' ) ) : ?>
		<?php while ( have_rows( 'second_section' ) ) : the_row(); ?>
			
			<div id="secondsection" class="wrapper" style="background-image: url(<?php the_sub_field( 'sc_image' ); ?>);">
				<div class="<?php echo esc_attr( $container ); ?>" id="sc-content" >
					<div class="row">
						
						<div class="col-md-6 col-sm-12 sc-content-text">
							<h2><?php the_sub_field( 'sc_title' ); ?></h2>
							<p><?php the_sub_field( 'sc_content' ); ?></p>
							<a class="btn" href="<?php echo $sc_button_link; ?>"><?php the_sub_field( 'sc_button_text' ); ?></a>
						</div>
						<div class="col-md-6 col-sm-12 sc-content-img">
						
							<?php if ( get_sub_field( 'sc_image') ) { ?>
								<img src="<?php the_sub_field( 'sc_image' ); ?>" />
							<?php } ?>
							
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'third_section' ) ) : ?>
		<?php while ( have_rows( 'third_section' ) ) : the_row(); ?>
			
			<div id="thirdsection" class="wrapper">
				<div class="<?php echo esc_attr( $container ); ?>" id="th-content" >
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2><?php the_sub_field( 'th_title' ); ?></h2>
							<p><?php the_sub_field( 'th_content' ); ?></p>
						</div>

					</div>

					<div class="row">
					<?php
					
						$args = array( 'post_type' => 'team', 'order' => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							echo '<div class="col-sm-12 col-md-3 text-center">';
								echo '<div class="team-photo">';
									the_post_thumbnail();
								echo '</div>';
								echo '<h3>';
									the_field( 'name' );
								echo '</h3>';
								echo '<p class="position">';
									the_field( 'position' );
								echo '</p>';
							echo '</div>';
						endwhile;

					?>
					</div>

				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

<?php
	}
	else
	{
?>


<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
	}
?>

<?php get_footer();
