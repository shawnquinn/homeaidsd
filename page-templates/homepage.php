<?php
/**
 * Template Name: Home Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

?>

<?php get_template_part('home-hero'); ?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper home-page" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" hidden>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

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

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

	<section id="welcome" class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mb-5 wow fadeIn"><?php echo esc_html_e('Needs Meet Opportunity', 'understrap') ?></h2>
					<p class="lead text-center my-3"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'understrap') ?></p>
				</div>
			</div>
			<div class="row align-items-center pt-3 pb-5 my-3">
				<div class="col-md-4">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/home-hand-icon.png" alt="<?php echo esc_html_e('Needs Meet Opportunity', 'understrap') ?>">
				</div>

				<div class="col-md-4">
					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Victims', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>

					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Family', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Children', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>

					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Veterans', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-5">
					<button class="btn btn-lg btn-primary btn-block" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Get Involved', 'understrap') ?></button>
				</div>
			</div>
	</section>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
